<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\Modules\ModuleService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('deactivate-module')]
#[Description('Disable (deactivate) an installed module. Use list-modules to find module names.')]
#[McpToolMeta(ability: 'mcp:modules.deactivate', permission: 'module.deactivate', group: 'Modules')]
class DeactivateModuleTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected ModuleService $moduleService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:modules.deactivate', 'module.deactivate')) {
            return $response;
        }

        if (config('app.demo_mode', false)) {
            return Response::error(__('Module disabling is restricted in demo mode. Please try on your local/live environment.'));
        }

        $validated = $request->validate([
            'module_name' => ['required', 'string', 'max:255'],
        ]);

        $module = $this->moduleService->getModuleByName($validated['module_name']);

        if ($module === null) {
            return Response::error(__('Module not found.'));
        }

        $user = Auth::user();

        if ($user === null || ! $user->can('deactivate', $module)) {
            return Response::error(__('You do not have permission to deactivate modules.'));
        }

        $jsonName = $this->moduleService->getModuleJsonName($validated['module_name']);

        if ($jsonName === null) {
            return Response::error(__('Module not found.'));
        }

        $statusKey = strtolower($jsonName);
        $statuses = $this->moduleService->getModuleStatuses();
        $currentlyEnabled = (bool) ($statuses[$statusKey] ?? false);

        if (! $currentlyEnabled) {
            return Response::json([
                'message' => __('Module is already disabled.'),
                'module' => $this->modulePayload($module, false),
            ]);
        }

        try {
            $this->moduleService->toggleModule($jsonName, false);
        } catch (\Throwable $exception) {
            return Response::error($exception->getMessage());
        }

        $refreshed = $this->moduleService->getModuleByName($validated['module_name']);

        return Response::json([
            'message' => __('Module deactivated successfully.'),
            'module' => $this->modulePayload($refreshed ?? $module, false),
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'module_name' => $schema->string()
                ->description('Module folder or JSON name (e.g. crm, docforge). Use list-modules to discover names.')
                ->required(),
        ];
    }

    /**
     * @return array{name: string, title: string, version: string, enabled: bool}
     */
    protected function modulePayload(\App\Models\Module $module, bool $enabled): array
    {
        return [
            'name' => $module->name,
            'title' => $module->title,
            'version' => $module->version,
            'enabled' => $enabled,
        ];
    }
}
