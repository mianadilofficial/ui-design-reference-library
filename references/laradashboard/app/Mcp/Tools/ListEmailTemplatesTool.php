<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\Emails\EmailTemplateService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('list-email-templates')]
#[Description('List email templates with optional search, type filter, and pagination.')]
#[McpToolMeta(ability: 'mcp:email_templates.read', permission: 'email_template.view', group: 'Email')]
class ListEmailTemplatesTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected EmailTemplateService $emailTemplateService
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:email_templates.read', 'email_template.view')) {
            return $response;
        }

        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:255'],
            'type' => ['nullable', 'string', 'max:100'],
            'is_active' => ['nullable', 'boolean'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:50'],
            'page' => ['nullable', 'integer', 'min:1'],
        ]);

        $perPage = (int) ($validated['per_page'] ?? 10);
        $page = (int) ($validated['page'] ?? 1);

        request()->merge([
            'page' => $page,
            'search' => $validated['search'] ?? null,
            'type' => $validated['type'] ?? null,
            'is_active' => $validated['is_active'] ?? null,
        ]);

        $templates = $this->emailTemplateService->getPaginatedTemplates(
            $validated['search'] ?? null,
            $perPage
        );

        return Response::json([
            'data' => collect($templates->items())->map(fn ($template) => [
                'id' => $template->id,
                'uuid' => $template->uuid,
                'name' => $template->name,
                'subject' => $template->subject,
                'type' => $template->type,
                'description' => $template->description,
                'is_active' => (bool) $template->is_active,
                'created_at' => optional($template->created_at)?->toIso8601String(),
                'updated_at' => optional($template->updated_at)?->toIso8601String(),
            ])->values()->all(),
            'meta' => [
                'current_page' => $templates->currentPage(),
                'last_page' => $templates->lastPage(),
                'per_page' => $templates->perPage(),
                'total' => $templates->total(),
            ],
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'search' => $schema->string()
                ->description('Search by template name, subject, or description.'),
            'type' => $schema->string()
                ->description('Filter by template type, e.g. transactional or marketing.'),
            'is_active' => $schema->boolean()
                ->description('Filter by active status.'),
            'per_page' => $schema->integer()
                ->description('Number of records to return (max 50).')
                ->default(10),
            'page' => $schema->integer()
                ->description('Page number for pagination.')
                ->default(1),
        ];
    }
}
