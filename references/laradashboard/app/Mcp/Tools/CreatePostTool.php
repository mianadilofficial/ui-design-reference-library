<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Ai\Data\AiResult;
use App\Enums\PostStatus;
use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\Builder\BlockService;
use App\Services\Builder\PostImageService;
use App\Services\PostService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('create-post')]
#[Description('Create a new post or page with LaraBuilder blocks. Use topic for full AI generation, or title/content for manual creation. Generates at least one header image by default when OpenAI is configured.')]
#[McpToolMeta(ability: 'mcp:posts.write', permission: 'post.create', group: 'Content')]
class CreatePostTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected PostService $postService,
        protected BlockService $blockService,
        protected PostImageService $postImageService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:posts.write', 'post.create')) {
            return $response;
        }

        $validated = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'topic' => ['nullable', 'string', 'max:500'],
            'content' => ['nullable', 'string'],
            'excerpt' => ['nullable', 'string'],
            'status' => ['nullable', 'string', 'in:draft,published,pending,scheduled,private'],
            'post_type' => ['nullable', 'string', 'in:post,page'],
            'include_images' => ['nullable', 'boolean'],
            'image_count' => ['nullable', 'integer', 'min:1', 'max:3'],
            'tone' => ['nullable', 'string', 'in:professional,casual,technical,friendly'],
            'length' => ['nullable', 'string', 'in:short,medium,long'],
        ]);

        $postType = $validated['post_type'] ?? 'post';
        $status = $validated['status'] ?? PostStatus::DRAFT->value;
        $includeImages = array_key_exists('include_images', $validated)
            ? (bool) $validated['include_images']
            : true;
        $imageCount = min(3, max(1, (int) ($validated['image_count'] ?? 1)));

        if ($includeImages) {
            set_time_limit(300);
        }

        if (! empty($validated['topic']) && empty($validated['title'])) {
            return $this->createFromTopic(
                topic: (string) $validated['topic'],
                postType: $postType,
                status: $status,
                includeImages: $includeImages,
                imageCount: $imageCount,
                tone: $validated['tone'] ?? 'professional',
                length: $validated['length'] ?? 'medium',
            );
        }

        if (empty($validated['title'])) {
            return Response::error(__('Either title or topic is required.'));
        }

        $content = $validated['content'] ?? '';
        $designJson = $this->blockService->buildDesignJsonFromContent($content);
        $imageNotice = null;
        $generatedImages = [];

        if ($includeImages) {
            if ($this->postImageService->canGenerate()) {
                $generatedImages = $this->postImageService->generateImages(
                    topic: (string) $validated['title'],
                    title: (string) $validated['title'],
                    count: $imageCount,
                );

                if ($generatedImages === []) {
                    $imageNotice = __('Post created, but image generation failed. You can add an image manually.');
                } else {
                    $designJson['blocks'] = $this->postImageService->prependFeaturedImageBlocks(
                        $designJson['blocks'],
                        $generatedImages,
                    );
                }
            } else {
                $imageNotice = __('Post created. Image generation requires an OpenAI API key.');
            }
        }

        $renderedContent = $this->blockService->parseBlocks($designJson['blocks']);

        $post = $this->postService->createPost([
            'title' => $validated['title'],
            'content' => $renderedContent,
            'design_json' => $designJson,
            'excerpt' => $validated['excerpt'] ?? '',
            'status' => $status,
            'post_type' => $postType,
            'author_id' => Auth::id(),
            'published_at' => $status === PostStatus::PUBLISHED->value ? now() : null,
        ]);

        $message = $imageNotice ?? __('Post created successfully.');

        return Response::json([
            'message' => $message,
            'post' => [
                'id' => $post->id,
                'title' => $post->title,
                'slug' => $post->slug,
                'status' => $post->status,
                'post_type' => $post->post_type,
                'block_count' => count($designJson['blocks']),
                'image_count' => count($generatedImages),
            ],
        ]);
    }

    protected function createFromTopic(
        string $topic,
        string $postType,
        string $status,
        bool $includeImages,
        int $imageCount,
        string $tone,
        string $length,
    ): Response {
        if (! class_exists(\App\Ai\Actions\CreatePostAction::class)) {
            return Response::error(__('AI post creation is not available.'));
        }

        /** @var \App\Ai\Actions\CreatePostAction $action */
        $action = app(\App\Ai\Actions\CreatePostAction::class);

        $result = $action->handle([
            'topic' => $topic,
            'post_type' => $postType,
            'tone' => $tone,
            'length' => $length,
            'include_images' => $includeImages,
            'image_count' => $imageCount,
        ]);

        if ($result->isFailed()) {
            return Response::error($result->message);
        }

        $postId = $result->data['post_id'] ?? null;

        if ($postId && $status !== PostStatus::DRAFT->value) {
            $post = $this->postService->getPostById((int) $postId, $postType);

            if ($post !== null) {
                $this->postService->updatePost($post, [
                    'status' => $status,
                    'published_at' => $status === PostStatus::PUBLISHED->value ? now() : null,
                ]);
            }
        }

        return Response::json([
            'message' => $result->message,
            'post' => array_merge($result->data, [
                'status' => $status,
            ]),
            'actions' => $result->actions,
            'partial' => $result->status === AiResult::STATUS_PARTIAL,
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'title' => $schema->string()
                ->description('Post title for manual creation.'),
            'topic' => $schema->string()
                ->description('Topic prompt for AI-generated LaraBuilder content (alternative to title/content).'),
            'content' => $schema->string()
                ->description('HTML or plain text content. Converted into LaraBuilder blocks for the post editor.'),
            'excerpt' => $schema->string()
                ->description('Optional excerpt.'),
            'include_images' => $schema->boolean()
                ->description('Generate at least one AI header image when OpenAI is configured. Defaults to true.')
                ->default(true),
            'image_count' => $schema->integer()
                ->description('Number of AI images to generate (1-3). Defaults to 1.')
                ->default(1),
            'tone' => $schema->string()
                ->description('Tone for AI topic-based generation.')
                ->enum(['professional', 'casual', 'technical', 'friendly'])
                ->default('professional'),
            'length' => $schema->string()
                ->description('Length for AI topic-based generation.')
                ->enum(['short', 'medium', 'long'])
                ->default('medium'),
            'status' => $schema->string()
                ->description('Publication status.')
                ->enum(['draft', 'published', 'pending', 'scheduled', 'private'])
                ->default('draft'),
            'post_type' => $schema->string()
                ->description('Content type.')
                ->enum(['post', 'page'])
                ->default('post'),
        ];
    }
}
