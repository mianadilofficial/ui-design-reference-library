<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\Mcp\McpSettingsService;
use App\Services\Modules\ModuleService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\File;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('get-site-health')]
#[Description('Read-only site snapshot: Laravel version, drivers, MCP status, and installed modules. Use to diagnose missing tools or configuration issues.')]
#[McpToolMeta(ability: 'mcp:ops.health.read', permission: 'dashboard.view', group: 'Operations')]
class GetSiteHealthTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected McpSettingsService $mcpSettingsService,
        protected ModuleService $moduleService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:ops.health.read', 'dashboard.view')) {
            return $response;
        }

        $request->validate([]);

        $versionData = [];
        $versionPath = base_path('version.json');

        if (File::exists($versionPath)) {
            $versionData = json_decode(File::get($versionPath), true) ?? [];
        }

        $moduleStatuses = $this->moduleService->getModuleStatuses();
        $modules = [];

        $modulesPath = base_path('modules');
        if (File::isDirectory($modulesPath)) {
            foreach (File::directories($modulesPath) as $moduleDirectory) {
                $module = $this->moduleService->getModuleByName(basename($moduleDirectory));

                if ($module === null) {
                    continue;
                }

                $modules[] = [
                    'name' => $module->name,
                    'title' => $module->title,
                    'version' => $module->version,
                    'enabled' => (bool) ($moduleStatuses[strtolower($module->name)] ?? $module->status),
                ];
            }
        }

        usort($modules, fn (array $left, array $right): int => strcmp($left['name'], $right['name']));

        $enabledModules = array_values(array_filter($modules, fn (array $module): bool => $module['enabled']));
        $disabledModules = array_values(array_filter($modules, fn (array $module): bool => ! $module['enabled']));

        return Response::json([
            'laravel_version' => app()->version(),
            'php_version' => PHP_VERSION,
            'app' => [
                'name' => config('app.name'),
                'environment' => config('app.env'),
                'debug' => (bool) config('app.debug'),
                'version' => $versionData['version'] ?? null,
            ],
            'drivers' => [
                'cache' => config('cache.default'),
                'queue' => config('queue.default'),
                'session' => config('session.driver'),
                'database' => config('database.default'),
            ],
            'mcp' => [
                'enabled' => $this->mcpSettingsService->isEnabled(),
                'server_url' => $this->mcpSettingsService->serverUrl(),
            ],
            'modules' => [
                'total' => count($modules),
                'enabled_count' => count($enabledModules),
                'disabled_count' => count($disabledModules),
                'enabled' => array_map(fn (array $module): string => $module['name'], $enabledModules),
                'disabled' => array_map(fn (array $module): string => $module['name'], $disabledModules),
                'details' => $modules,
            ],
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [];
    }
}
