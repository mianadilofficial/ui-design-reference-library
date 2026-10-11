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

#[Name('activate-module')]
#[Description('Enable (activate) an installed module. Runs migrations and publishes assets by default. Use list-modules to find module names. Requires Superadmin.')]
#[McpToolMeta(ability: 'mcp:modules.activate', permission: 'module.activate', group: 'Modules')]
class ActivateModuleTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected ModuleService $moduleService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:modules.activate', 'module.activate')) {
            return $response;
        }

        if (config('app.demo_mode', false)) {
            return Response::error(__('Module enabling is restricted in demo mode. Please try on your local/live environment.'));
        }

        $validated = $request->validate([
            'module_name' => ['required', 'string', 'max:255'],
            'skip_migrations' => ['nullable', 'boolean'],
        ]);

        $module = $this->moduleService->getModuleByName($validated['module_name']);

        if ($module === null) {
            return Response::error(__('Module not found.'));
        }

        $user = Auth::user();

        if ($user === null || ! $user->can('activate', $module)) {
            return Response::error(__('You do not have permission to activate modules.'));
        }

        $jsonName = $this->moduleService->getModuleJsonName($validated['module_name']);

        if ($jsonName === null) {
            return Response::error(__('Module not found.'));
        }

        $statusKey = strtolower($jsonName);
        $statuses = $this->moduleService->getModuleStatuses();
        $currentlyEnabled = (bool) ($statuses[$statusKey] ?? false);

        if ($currentlyEnabled) {
            return Response::json([
                'message' => __('Module is already enabled.'),
                'module' => $this->modulePayload($module, true),
            ]);
        }

        try {
            $this->moduleService->toggleModule(
                $jsonName,
                true,
                (bool) ($validated['skip_migrations'] ?? false),
            );
        } catch (\Throwable $exception) {
            return Response::error($exception->getMessage());
        }

        $refreshed = $this->moduleService->getModuleByName($validated['module_name']);

        return Response::json([
            'message' => __('Module activated successfully.'),
            'module' => $this->modulePayload($refreshed ?? $module, true),
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'module_name' => $schema->string()
                ->description('Module folder or JSON name (e.g. crm, docforge). Use list-modules to discover names.')
                ->required(),
            'skip_migrations' => $schema->boolean()
                ->description('When true, enable without running module migrations.')
                ->default(false),
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
