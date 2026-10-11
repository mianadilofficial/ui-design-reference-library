<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Enums\PostStatus;
use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\Builder\BlockService;
use App\Services\PostService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('update-post')]
#[Description('Update an existing post or page — title, content, excerpt, status, and publish date. Use to publish pending posts or revise drafts.')]
#[McpToolMeta(ability: 'mcp:posts.update', permission: 'post.edit', group: 'Content')]
class UpdatePostTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected PostService $postService,
        protected BlockService $blockService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:posts.update', 'post.edit')) {
            return $response;
        }

        $validated = $request->validate([
            'post_id' => ['required', 'integer', 'min:1'],
            'post_type' => ['nullable', 'string', 'in:post,page'],
            'title' => ['nullable', 'string', 'max:255'],
            'content' => ['nullable', 'string'],
            'excerpt' => ['nullable', 'string'],
            'status' => ['nullable', 'string', 'in:draft,published,pending,scheduled,private'],
            'published_at' => ['nullable', 'date'],
        ]);

        $postType = $validated['post_type'] ?? 'post';

        try {
            $post = $this->postService->getPostById((int) $validated['post_id'], $postType);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException) {
            return Response::error(__('Post not found.'));
        }

        if ($post === null) {
            return Response::error(__('Post not found.'));
        }

        $updateData = [];

        if (isset($validated['title'])) {
            $updateData['title'] = $validated['title'];
        }

        if (array_key_exists('excerpt', $validated)) {
            $updateData['excerpt'] = $validated['excerpt'];
        }

        if (isset($validated['status'])) {
            $updateData['status'] = $validated['status'];
        }

        if (array_key_exists('published_at', $validated)) {
            $updateData['published_at'] = $validated['published_at'];
        }

        if (! empty($validated['content'])) {
            $designJson = $this->blockService->buildDesignJsonFromContent($validated['content']);
            $updateData['design_json'] = $designJson;
            $updateData['content'] = $this->blockService->parseBlocks($designJson['blocks']);
        }

        if (($updateData['status'] ?? null) === PostStatus::PUBLISHED->value && empty($updateData['published_at']) && $post->published_at === null) {
            $updateData['published_at'] = now();
        }

        if ($updateData === []) {
            return Response::error(__('No update fields were provided.'));
        }

        $post = $this->postService->updatePost($post, $updateData);

        return Response::json([
            'message' => __('Post updated successfully.'),
            'post' => [
                'id' => $post->id,
                'title' => $post->title,
                'slug' => $post->slug,
                'status' => $post->status,
                'post_type' => $post->post_type,
                'published_at' => optional($post->published_at)?->toIso8601String(),
                'updated_at' => optional($post->updated_at)?->toIso8601String(),
                'admin_url' => route('admin.posts.edit', ['postType' => $post->post_type, 'post' => $post->id]),
            ],
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'post_id' => $schema->integer()
                ->description('The post ID to update.')
                ->required(),
            'post_type' => $schema->string()
                ->description('Content type.')
                ->enum(['post', 'page'])
                ->default('post'),
            'title' => $schema->string()
                ->description('Updated title.'),
            'content' => $schema->string()
                ->description('Updated HTML or plain text content. Converted into LaraBuilder blocks.'),
            'excerpt' => $schema->string()
                ->description('Updated excerpt.'),
            'status' => $schema->string()
                ->description('Publication status.')
                ->enum(['draft', 'published', 'pending', 'scheduled', 'private']),
            'published_at' => $schema->string()
                ->description('Publish date/time (ISO 8601). Auto-set when publishing without a date.'),
        ];
    }
}
