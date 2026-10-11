<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\Mcp\McpBriefingService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('get-daily-briefing')]
#[Description('Get a personalized today checklist with actionable items from core and installed modules — tickets, reviews, form messages, errors, and more. Use when the user asks what is up, what needs attention, or what to do today.')]
#[McpToolMeta(ability: 'mcp:briefing.read', permission: 'dashboard.view', group: 'Overview')]
class GetDailyBriefingTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected McpBriefingService $briefingService
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:briefing.read', 'dashboard.view')) {
            return $response;
        }

        $user = Auth::user();

        if ($user === null) {
            return Response::error(__('Authentication required.'));
        }

        $validated = $request->validate([
            'include_samples' => ['nullable', 'boolean'],
            'sections' => ['nullable', 'array'],
            'sections.*' => ['string', 'max:50'],
            'priority_min' => ['nullable', 'string', 'in:high,medium,low'],
        ]);

        $briefing = $this->briefingService->generateForUser($user, [
            'include_samples' => $validated['include_samples'] ?? true,
            'sections' => $validated['sections'] ?? null,
            'priority_min' => $validated['priority_min'] ?? null,
        ]);

        return Response::json($briefing);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'include_samples' => $schema->boolean()
                ->description('Include sample records for each briefing item.')
                ->default(true),
            'sections' => $schema->array()
                ->description('Optional section keys to include, e.g. core, crm, marketplace, forms.'),
            'priority_min' => $schema->string()
                ->description('Minimum priority to include: high, medium, or low.')
                ->enum(['high', 'medium', 'low']),
        ];
    }
}
