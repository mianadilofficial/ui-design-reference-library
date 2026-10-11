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

#[Name('delete-post')]
#[Description('Permanently delete a post or page. Use to remove drafts or unwanted content.')]
#[McpToolMeta(ability: 'mcp:posts.delete', permission: 'post.delete', group: 'Content')]
class DeletePostTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected PostService $postService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:posts.delete', 'post.delete')) {
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

        $deleted = [
            'id' => $post->id,
            'title' => $post->title,
            'slug' => $post->slug,
            'post_type' => $post->post_type,
        ];

        $post->delete();

        return Response::json([
            'message' => __('Post deleted successfully.'),
            'post' => $deleted,
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'post_id' => $schema->integer()
                ->description('The post ID to delete.')
                ->required(),
            'post_type' => $schema->string()
                ->description('Content type.')
                ->enum(['post', 'page'])
                ->default('post'),
        ];
    }
}
