<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\Emails\EmailTemplateService;
use App\Services\Emails\EmailVariable;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('get-email-template')]
#[Description('Retrieve a single email template by ID, optionally with rendered preview content.')]
#[McpToolMeta(ability: 'mcp:email_templates.read', permission: 'email_template.view', group: 'Email')]
class GetEmailTemplateTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected EmailTemplateService $emailTemplateService,
        protected EmailVariable $emailVariable
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:email_templates.read', 'email_template.view')) {
            return $response;
        }

        $validated = $request->validate([
            'template_id' => ['required', 'integer', 'min:1'],
            'include_rendered' => ['nullable', 'boolean'],
            'variables' => ['nullable', 'array'],
        ]);

        $template = $this->emailTemplateService->getTemplateById((int) $validated['template_id']);

        if ($template === null) {
            return Response::error(__('Email template not found.'));
        }

        $payload = [
            'id' => $template->id,
            'uuid' => $template->uuid,
            'name' => $template->name,
            'subject' => $template->subject,
            'body_html' => $template->body_html,
            'type' => $template->type,
            'description' => $template->description,
            'is_active' => (bool) $template->is_active,
            'created_at' => optional($template->created_at)?->toIso8601String(),
            'updated_at' => optional($template->updated_at)?->toIso8601String(),
        ];

        if ($validated['include_rendered'] ?? false) {
            $variables = array_merge(
                $this->emailVariable->getPreviewSampleData(),
                $validated['variables'] ?? []
            );

            $rendered = $template->renderTemplate($variables);
            $payload['rendered'] = [
                'subject' => $rendered['subject'] ?? '',
                'body_html' => $rendered['body_html'] ?? '',
                'variables_used' => $variables,
            ];
        }

        return Response::json($payload);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'template_id' => $schema->integer()
                ->description('The email template ID to retrieve.')
                ->required(),
            'include_rendered' => $schema->boolean()
                ->description('When true, include subject/body rendered with sample or provided variables.')
                ->default(false),
            'variables' => $schema->object()
                ->description('Optional key/value map for template variable substitution when rendering.'),
        ];
    }
}
