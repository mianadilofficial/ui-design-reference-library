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

#[Name('list-posts')]
#[Description('List posts or pages with optional search, status, and pagination filters.')]
#[McpToolMeta(ability: 'mcp:posts.read', permission: 'post.view', group: 'Content')]
class ListPostsTool extends Tool
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
            'post_type' => ['nullable', 'string', 'in:post,page'],
            'search' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string', 'max:50'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:50'],
            'page' => ['nullable', 'integer', 'min:1'],
        ]);

        $postType = $validated['post_type'] ?? 'post';
        $perPage = (int) ($validated['per_page'] ?? 10);

        $filters = array_filter([
            'search' => $validated['search'] ?? null,
            'status' => $validated['status'] ?? null,
            'post_type' => $postType,
        ]);

        $posts = $this->postService->getPaginatedPosts($filters, $perPage);

        return Response::json([
            'post_type' => $postType,
            'data' => $posts->getCollection()->map(fn ($post) => [
                'id' => $post->id,
                'title' => $post->title,
                'slug' => $post->slug,
                'status' => $post->status,
                'post_type' => $post->post_type,
                'excerpt' => $post->excerpt,
                'published_at' => optional($post->published_at)?->toIso8601String(),
                'created_at' => optional($post->created_at)?->toIso8601String(),
                'updated_at' => optional($post->updated_at)?->toIso8601String(),
            ])->values()->all(),
            'meta' => [
                'current_page' => $posts->currentPage(),
                'last_page' => $posts->lastPage(),
                'per_page' => $posts->perPage(),
                'total' => $posts->total(),
            ],
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'post_type' => $schema->string()
                ->description('Content type to list.')
                ->enum(['post', 'page'])
                ->default('post'),
            'search' => $schema->string()
                ->description('Optional search term for title or content.'),
            'status' => $schema->string()
                ->description('Optional status filter, e.g. draft or publish.'),
            'per_page' => $schema->integer()
                ->description('Number of records to return (max 50).')
                ->default(10),
            'page' => $schema->integer()
                ->description('Page number for pagination.')
                ->default(1),
        ];
    }
}
