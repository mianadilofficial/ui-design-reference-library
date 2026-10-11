<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Artisan;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('clear-cache')]
#[Description('Clear application caches (config, route, view, and application cache). Use after settings or module changes.')]
#[McpToolMeta(ability: 'mcp:ops.cache', permission: 'settings.edit', group: 'Operations')]
class ClearCacheTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:ops.cache', 'settings.edit')) {
            return $response;
        }

        if (config('app.demo_mode', false)) {
            return Response::error(__('Clearing caches is restricted in demo mode.'));
        }

        $validated = $request->validate([
            'target' => ['nullable', 'string', 'in:all,application,config,route,view'],
        ]);

        $target = $validated['target'] ?? 'all';

        try {
            match ($target) {
                'application' => Artisan::call('cache:clear'),
                'config' => Artisan::call('config:clear'),
                'route' => Artisan::call('route:clear'),
                'view' => Artisan::call('view:clear'),
                default => Artisan::call('optimize:clear'),
            };
        } catch (\Throwable $exception) {
            return Response::error(__('Failed to clear cache: :message', ['message' => $exception->getMessage()]));
        }

        return Response::json([
            'success' => true,
            'message' => __('Cache cleared successfully.'),
            'target' => $target,
            'cleared_at' => now()->toIso8601String(),
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'target' => $schema->string()
                ->description('Which cache to clear. Defaults to all caches.')
                ->enum(['all', 'application', 'config', 'route', 'view'])
                ->default('all'),
        ];
    }
}
