<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\PostService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('get-post')]
#[Description('Retrieve a single post or page by ID.')]
#[McpToolMeta(ability: 'mcp:posts.read', permission: 'post.view', group: 'Content')]
class GetPostTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected PostService $postService
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:posts.read', 'post.view')) {
            return $response;
        }

        $validated = $request->validate([
            'post_id' => ['required', 'integer', 'min:1'],
            'post_type' => ['nullable', 'string', 'in:post,page'],
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

        return Response::json([
            'id' => $post->id,
            'title' => $post->title,
            'slug' => $post->slug,
            'status' => $post->status,
            'post_type' => $post->post_type,
            'excerpt' => $post->excerpt,
            'content' => $post->content,
            'published_at' => optional($post->published_at)?->toIso8601String(),
            'created_at' => optional($post->created_at)?->toIso8601String(),
            'updated_at' => optional($post->updated_at)?->toIso8601String(),
            'author_id' => $post->user_id,
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'post_id' => $schema->integer()
                ->description('The post ID to retrieve.')
                ->required(),
            'post_type' => $schema->string()
                ->description('Content type.')
                ->enum(['post', 'page'])
                ->default('post'),
        ];
    }
}
