<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\Mcp\McpRegistryService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;
use Laravel\Sanctum\PersonalAccessToken;

#[Name('list-mcp-tools')]
#[Description('List MCP tools available to the current token, respecting token abilities and user permissions. Use to discover installed module tools.')]
#[McpToolMeta(ability: 'mcp:access', group: 'Discovery')]
class ListMcpToolsTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected McpRegistryService $mcpRegistryService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:access')) {
            return $response;
        }

        $request->validate([]);

        /** @var PersonalAccessToken|null $token */
        $token = Auth::user()?->currentAccessToken();

        $availableTools = collect($this->mcpRegistryService->toolDefinitions())
            ->filter(function (array $definition) use ($token): bool {
                $ability = $definition['ability'];

                if ($token !== null && ! $token->can($ability)) {
                    return false;
                }

                $permission = $definition['permission'] ?? null;

                if ($permission !== null && Auth::user()?->can($permission) !== true) {
                    return false;
                }

                return true;
            })
            ->map(fn (array $definition): array => [
                'name' => $definition['name'],
                'description' => $definition['description'],
                'group' => $definition['group'],
                'ability' => $definition['ability'],
                'permission' => $definition['permission'],
            ])
            ->values()
            ->all();

        return Response::json([
            'data' => $availableTools,
            'meta' => [
                'total' => count($availableTools),
            ],
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [];
    }
}
