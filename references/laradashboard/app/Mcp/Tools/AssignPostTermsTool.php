<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Models\Term;
use App\Services\PostService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('assign-post-terms')]
#[Description('Assign categories and/or tags to a post by term ID. Replaces existing terms for the given taxonomies. Use list-terms first to discover term IDs.')]
#[McpToolMeta(ability: 'mcp:posts.update', permission: 'post.edit', group: 'Content')]
class AssignPostTermsTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected PostService $postService,
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
            'term_ids' => ['required', 'array', 'min:1'],
            'term_ids.*' => ['integer', 'min:1'],
        ]);

        $postType = $validated['post_type'] ?? 'post';
        $termIds = array_values(array_unique(array_map('intval', $validated['term_ids'])));

        try {
            $post = $this->postService->getPostById((int) $validated['post_id'], $postType);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException) {
            return Response::error(__('Post not found.'));
        }

        if ($post === null) {
            return Response::error(__('Post not found.'));
        }

        $terms = Term::query()->whereIn('id', $termIds)->get();

        if ($terms->count() !== count($termIds)) {
            $foundIds = $terms->pluck('id')->all();
            $missingIds = array_values(array_diff($termIds, $foundIds));

            return Response::error(__('Some term IDs were not found: :ids', [
                'ids' => implode(', ', $missingIds),
            ]));
        }

        $post = $this->postService->updatePost($post, ['terms' => $termIds]);

        return Response::json([
            'message' => __('Terms assigned successfully.'),
            'post' => [
                'id' => $post->id,
                'title' => $post->title,
                'terms' => $post->terms->map(fn (Term $term): array => [
                    'id' => $term->id,
                    'name' => $term->name,
                    'slug' => $term->slug,
                    'taxonomy' => $term->taxonomy,
                ])->values()->all(),
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
            'term_ids' => $schema->array()
                ->description('Term IDs to assign (from list-terms). Replaces all existing terms on the post.')
                ->items($schema->integer())
                ->required(),
        ];
    }
}
