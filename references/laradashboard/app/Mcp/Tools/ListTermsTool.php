<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\TermService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('list-terms')]
#[Description('List categories or tags with optional search. Use term IDs with assign-post-terms before publishing.')]
#[McpToolMeta(ability: 'mcp:terms.read', permission: 'term.view', group: 'Content')]
class ListTermsTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected TermService $termService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:terms.read', 'term.view')) {
            return $response;
        }

        $validated = $request->validate([
            'taxonomy' => ['nullable', 'string', 'in:category,tag'],
            'search' => ['nullable', 'string', 'max:255'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:100'],
            'page' => ['nullable', 'integer', 'min:1'],
        ]);

        $filters = array_filter([
            'taxonomy' => $validated['taxonomy'] ?? 'category',
            'search' => $validated['search'] ?? null,
        ]);

        if (isset($validated['page'])) {
            request()->merge(['page' => $validated['page']]);
        }

        config(['settings.default_pagination' => (int) ($validated['per_page'] ?? 50)]);

        $terms = $this->termService->getTerms($filters);

        return Response::json([
            'taxonomy' => $filters['taxonomy'],
            'data' => $terms->getCollection()->map(fn ($term) => [
                'id' => $term->id,
                'name' => $term->name,
                'slug' => $term->slug,
                'taxonomy' => $term->taxonomy,
                'description' => $term->description,
            ])->values()->all(),
            'meta' => [
                'current_page' => $terms->currentPage(),
                'last_page' => $terms->lastPage(),
                'per_page' => $terms->perPage(),
                'total' => $terms->total(),
            ],
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'taxonomy' => $schema->string()
                ->description('Taxonomy to list.')
                ->enum(['category', 'tag'])
                ->default('category'),
            'search' => $schema->string()
                ->description('Optional filter by term name or slug.'),
            'per_page' => $schema->integer()
                ->description('Number of records to return (max 100).')
                ->default(50),
            'page' => $schema->integer()
                ->description('Page number for pagination.')
                ->default(1),
        ];
    }
}
