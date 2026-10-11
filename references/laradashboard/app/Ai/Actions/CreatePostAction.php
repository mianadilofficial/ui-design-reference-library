<?php

declare(strict_types=1);

namespace App\Ai\Actions;

use App\Ai\Contracts\AiActionInterface;
use App\Ai\Data\AiResult;
use App\Models\Post;
use App\Services\AiContentGeneratorService;
use App\Services\Builder\BlockService;
use App\Services\Builder\PostImageService;
use Exception;
use Illuminate\Support\Str;

/**
 * AI Action to create a post or page with AI-generated content.
 * Supports optional AI-generated images.
 */
class CreatePostAction implements AiActionInterface
{
    public function __construct(
        private AiContentGeneratorService $aiService,
        private BlockService $blockService,
        private PostImageService $postImageService,
    ) {
    }

    public static function name(): string
    {
        return 'posts.create';
    }

    public static function description(): string
    {
        return __('Create a new post or page with AI-generated content based on a topic or prompt, optionally with images.');
    }

    public static function payloadSchema(): array
    {
        return [
            'type' => 'object',
            'required' => ['topic'],
            'properties' => [
                'topic' => [
                    'type' => 'string',
                    'description' => 'The topic or subject for the post or page',
                ],
                'post_type' => [
                    'type' => 'string',
                    'enum' => ['post', 'page'],
                    'description' => 'The type of content to create (post for blog posts, page for static pages)',
                    'default' => 'post',
                ],
                'tone' => [
                    'type' => 'string',
                    'enum' => ['professional', 'casual', 'technical', 'friendly'],
                    'default' => 'professional',
                ],
                'length' => [
                    'type' => 'string',
                    'enum' => ['short', 'medium', 'long'],
                    'default' => 'medium',
                ],
                'include_images' => [
                    'type' => 'boolean',
                    'description' => 'Whether to generate and include AI images in the post',
                    'default' => false,
                ],
                'image_count' => [
                    'type' => 'integer',
                    'description' => 'Number of images to generate (1-3)',
                    'default' => 1,
                    'minimum' => 1,
                    'maximum' => 3,
                ],
            ],
        ];
    }

    public static function permission(): ?string
    {
        return 'post.create';
    }

    public function handle(array $payload): AiResult
    {
        return $this->handleWithProgress($payload, null);
    }

    /**
     * Handle with progress callback for streaming updates.
     *
     * @param  callable|null  $onProgress  fn(string $step, string $status, ?array $data)
     */
    public function handleWithProgress(array $payload, ?callable $onProgress = null): AiResult
    {
        // Helper to report progress
        $progress = function (string $step, string $status = 'in_progress', ?array $data = null) use ($onProgress) {
            if ($onProgress) {
                $onProgress($step, $status, $data);
            }
        };

        // Extend execution time for image generation (images take 30-60s each)
        $includeImages = $payload['include_images'] ?? false;
        if ($includeImages) {
            set_time_limit(300); // 5 minutes for image generation
        }

        try {
            $topic = $payload['topic'] ?? '';
            $tone = $payload['tone'] ?? 'professional';
            $length = $payload['length'] ?? 'medium';
            $imageCount = min(3, max(1, (int) ($payload['image_count'] ?? 1)));
            $postType = $payload['post_type'] ?? 'post';

            // Validate post_type
            if (! in_array($postType, ['post', 'page'], true)) {
                $postType = 'post';
            }

            $contentTypeLabel = $postType === 'page' ? __('page') : __('post');

            if (empty($topic)) {
                return AiResult::failed(__('Topic is required to create a :type.', ['type' => $contentTypeLabel]));
            }

            $completedSteps = [];

            // Step 1: Generate content
            $progress(__('Generating content...'), 'in_progress', ['phase' => 'content']);

            $prompt = $this->buildPrompt($topic, $tone, $length, $includeImages);
            $content = $this->aiService->generateContent($prompt, 'post_content');

            $progress(__('Content generated'), 'completed', ['phase' => 'content']);
            $completedSteps[] = __('Generated content for: :topic', ['topic' => $topic]);

            // Step 2: Create post/page
            $progress(__('Creating :type...', ['type' => $contentTypeLabel]), 'in_progress', ['phase' => 'post']);

            $blocks = $this->buildBlocks($content, []);
            $post = Post::create([
                'title' => $content['title'],
                'slug' => Str::slug($content['title']).'-'.Str::random(5),
                'excerpt' => $content['excerpt'] ?? '',
                'status' => 'draft',
                'user_id' => auth()->id(),
                'post_type' => $postType,
                'design_json' => [
                    'blocks' => $blocks,
                    'version' => 1,
                ],
                'content' => $this->blockService->parseBlocks($blocks),
            ]);

            $progress(__(ucfirst($contentTypeLabel).' created'), 'completed', ['phase' => 'post', 'post_id' => $post->id]);
            $completedSteps[] = __('Created draft :type: :title', ['type' => $contentTypeLabel, 'title' => $post->title]);

            // Step 3: Generate images (if requested)
            $generatedImages = [];
            $imageError = null;

            if ($includeImages && $this->postImageService->canGenerate()) {
                $progress(__('Generating images...'), 'in_progress', [
                    'phase' => 'images',
                    'count' => $imageCount,
                ]);

                try {
                    $generatedImages = $this->postImageService->generateImages(
                        topic: $topic,
                        title: (string) ($content['title'] ?? $topic),
                        count: $imageCount,
                        imageSuggestions: $content['image_suggestions'] ?? [],
                    );

                    if (count($generatedImages) > 0) {
                        $progress(__('Adding images to post...'), 'in_progress', ['phase' => 'update']);

                        $blocksWithImages = $this->buildBlocks($content, $generatedImages);
                        $post->update([
                            'design_json' => [
                                'blocks' => $blocksWithImages,
                                'version' => 1,
                            ],
                            'content' => $this->blockService->parseBlocks($blocksWithImages),
                        ]);

                        $progress(__('Images added to post'), 'completed', ['phase' => 'images']);
                        $completedSteps[] = __('Added :count image(s) to post', ['count' => count($generatedImages)]);
                    }
                } catch (Exception $e) {
                    $imageError = $e->getMessage();
                    $progress(__('Image generation failed'), 'failed', ['phase' => 'images', 'error' => $imageError]);
                    \Illuminate\Support\Facades\Log::warning('Image generation failed for post', [
                        'post_id' => $post->id,
                        'error' => $imageError,
                    ]);
                }
            }

            // Determine result status
            $contentTypeLabelUcfirst = ucfirst($contentTypeLabel);
            $message = __(':type created successfully as draft.', ['type' => $contentTypeLabelUcfirst]);
            $status = 'success';

            if ($includeImages && empty($generatedImages)) {
                if ($imageError) {
                    $message = __(':type created, but image generation failed. You can add images manually.', ['type' => $contentTypeLabelUcfirst]);
                    $status = 'partial';
                    $completedSteps[] = __('Image generation skipped: :reason', ['reason' => Str::limit($imageError, 50)]);
                } elseif (! $this->postImageService->canGenerate()) {
                    $message = __(':type created. Image generation requires OpenAI API key.', ['type' => $contentTypeLabelUcfirst]);
                    $status = 'partial';
                    $completedSteps[] = __('Image generation not available (OpenAI key not configured)');
                }
            }

            $progress(__('Completed!'), 'completed', ['phase' => 'done']);

            // Determine action labels based on post type
            $editLabel = $postType === 'page' ? __('Edit Page') : __('Edit Post');
            $viewLabel = $postType === 'page' ? __('View Page') : __('View Post');

            return new AiResult(
                status: $status,
                message: $message,
                data: [
                    'post_id' => $post->id,
                    'post_type' => $postType,
                    'title' => $post->title,
                    'has_images' => count($generatedImages) > 0,
                ],
                actions: [
                    $editLabel => route('admin.posts.edit', ['postType' => $postType, 'post' => $post->id]),
                    $viewLabel => route('admin.posts.show', ['postType' => $postType, 'post' => $post->id]),
                ],
                completedSteps: $completedSteps
            );
        } catch (Exception $e) {
            $progress(__('Failed'), 'failed', ['error' => $e->getMessage()]);

            return AiResult::failed(__('Failed to create :type: :error', ['type' => $contentTypeLabel ?? 'post', 'error' => $e->getMessage()]));
        }
    }

    /**
     * Build blocks from the AI-generated content and images.
     *
     * @param  array<int, array{url: string, alt: string}>  $images
     */
    private function buildBlocks(array $content, array $images = []): array
    {
        $blocks = [];

        // Add featured image at the top if available
        if (! empty($images)) {
            $featuredImage = array_shift($images);
            $blocks[] = $this->blockService->image(
                $featuredImage['url'],
                $featuredImage['alt'],
                '100%',
                'center'
            );
            $blocks[] = $this->blockService->spacer('24px');
        }

        // Add heading block with the title
        $blocks[] = $this->blockService->heading($content['title'] ?? 'Untitled');
        $blocks[] = $this->blockService->spacer('16px');

        // Split content into paragraphs and create text blocks
        $rawContent = $content['content'] ?? '';
        $paragraphs = array_filter(
            preg_split('/\n\s*\n/', $rawContent),
            fn ($p) => ! empty(trim($p))
        );

        $paragraphCount = count($paragraphs);
        $remainingImages = $images;

        // Calculate where to insert remaining images (distribute evenly)
        $imagePositions = [];
        if (! empty($remainingImages) && $paragraphCount > 1) {
            $interval = (int) floor($paragraphCount / (count($remainingImages) + 1));
            for ($i = 0; $i < count($remainingImages); $i++) {
                $imagePositions[] = ($i + 1) * $interval;
            }
        }

        $imageIndex = 0;
        foreach ($paragraphs as $index => $paragraph) {
            $paragraph = trim($paragraph);

            // Check if this paragraph looks like a subheading (short, no period at end)
            if ($this->looksLikeSubheading($paragraph)) {
                $blocks[] = $this->blockService->heading($paragraph, 'h2', 'left', '#333333', '22px');
            } else {
                $blocks[] = $this->blockService->text($paragraph);
            }

            // Insert image after this paragraph if it's an image position
            if (in_array($index, $imagePositions) && isset($remainingImages[$imageIndex])) {
                $blocks[] = $this->blockService->spacer('20px');
                $blocks[] = $this->blockService->image(
                    $remainingImages[$imageIndex]['url'],
                    $remainingImages[$imageIndex]['alt'],
                    '100%',
                    'center'
                );
                $imageIndex++;
            }

            // Add spacer between paragraphs (except after last one)
            if ($index < $paragraphCount - 1) {
                $blocks[] = $this->blockService->spacer('16px');
            }
        }

        return $blocks;
    }

    /**
     * Check if a paragraph looks like a subheading.
     */
    private function looksLikeSubheading(string $text): bool
    {
        $text = trim($text);

        // Short text (less than 80 chars), doesn't end with period, and no line breaks
        return strlen($text) < 80
            && ! str_ends_with($text, '.')
            && ! str_contains($text, "\n")
            && ! str_starts_with($text, '-')
            && ! str_starts_with($text, '*');
    }

    private function buildPrompt(string $topic, string $tone, string $length, bool $includeImages = false): string
    {
        $wordCount = match ($length) {
            'short' => '300-500',
            'long' => '1500-2000',
            default => '800-1200',
        };

        $prompt = "Write a {$tone} blog post about: {$topic}. Target length: {$wordCount} words.";

        if ($includeImages) {
            $prompt .= "\n\nStructure the content with clear sections that would benefit from visual illustrations. ";
            $prompt .= 'Include natural break points where images would enhance the reading experience.';
        }

        return $prompt;
    }
}
