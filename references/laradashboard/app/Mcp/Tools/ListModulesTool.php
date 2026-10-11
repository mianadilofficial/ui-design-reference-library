<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\Modules\ModuleService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\File;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('list-modules')]
#[Description('List installed modules with enabled/disabled status and version. Use with list-mcp-tools to see which module tools are available.')]
#[McpToolMeta(ability: 'mcp:modules.read', permission: 'module.view', group: 'Discovery')]
class ListModulesTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected ModuleService $moduleService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:modules.read', 'module.view')) {
            return $response;
        }

        $validated = $request->validate([
            'enabled_only' => ['nullable', 'boolean'],
        ]);

        $enabledOnly = (bool) ($validated['enabled_only'] ?? false);
        $moduleStatuses = $this->moduleService->getModuleStatuses();
        $modules = [];

        $modulesPath = base_path('modules');
        if (File::isDirectory($modulesPath)) {
            foreach (File::directories($modulesPath) as $moduleDirectory) {
                $module = $this->moduleService->getModuleByName(basename($moduleDirectory));

                if ($module === null) {
                    continue;
                }

                $enabled = (bool) ($moduleStatuses[strtolower($module->name)] ?? $module->status);

                if ($enabledOnly && ! $enabled) {
                    continue;
                }

                $modules[] = [
                    'name' => $module->name,
                    'title' => $module->title,
                    'version' => $module->version,
                    'enabled' => $enabled,
                    'description' => strip_tags((string) $module->description),
                ];
            }
        }

        usort($modules, fn (array $left, array $right): int => strcmp($left['name'], $right['name']));

        return Response::json([
            'data' => $modules,
            'meta' => [
                'total' => count($modules),
                'enabled_count' => count(array_filter($modules, fn (array $module): bool => $module['enabled'])),
                'disabled_count' => count(array_filter($modules, fn (array $module): bool => ! $module['enabled'])),
            ],
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'enabled_only' => $schema->boolean()
                ->description('When true, return only enabled modules.')
                ->default(false),
        ];
    }
}
