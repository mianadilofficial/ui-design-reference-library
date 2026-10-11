<?php

declare(strict_types=1);

use App\Mcp\Servers\LaraDashboardServer;
use App\Mcp\Tools\ActivateModuleTool;
use App\Mcp\Tools\DeactivateModuleTool;
use App\Models\Module;
use App\Models\Role;
use App\Models\Setting;
use App\Models\User;
use App\Services\Mcp\McpRegistryService;
use App\Services\Mcp\McpTokenService;
use App\Services\Modules\ModuleService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;

pest()->use(RefreshDatabase::class);

beforeEach(function () {
    foreach ([
        'module.view', 'module.activate', 'module.deactivate', 'dashboard.view',
    ] as $permission) {
        Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
    }

    $this->superadmin = User::factory()->create();
    $superadminRole = Role::firstOrCreate(['name' => Role::SUPERADMIN, 'guard_name' => 'web']);
    $this->superadmin->assignRole($superadminRole);
    $this->superadmin->syncPermissions(['module.view', 'module.activate', 'module.deactivate', 'dashboard.view']);

    app(McpTokenService::class)->createToken($this->superadmin);
    $this->superadmin->withAccessToken($this->superadmin->tokens()->latest()->first());

    Setting::query()->updateOrCreate(
        ['option_name' => Setting::MCP_ENABLED],
        ['option_value' => '1', 'autoload' => true]
    );
    config(['settings.'.Setting::MCP_ENABLED => '1', 'app.demo_mode' => false]);
});

test('module management mcp tools are registered', function () {
    $toolClasses = app(McpRegistryService::class)->toolClasses();

    expect($toolClasses)->toContain(ActivateModuleTool::class)
        ->toContain(DeactivateModuleTool::class);
});

test('activate module mcp tool enables a disabled module', function () {
    $module = new Module([
        'id' => 'tester',
        'name' => 'tester',
        'title' => 'Tester',
        'version' => '1.0.0',
        'status' => false,
    ]);

    $this->mock(ModuleService::class, function ($mock) use ($module): void {
        $mock->shouldReceive('getModuleByName')
            ->with('tester')
            ->twice()
            ->andReturn($module);
        $mock->shouldReceive('getModuleJsonName')
            ->with('tester')
            ->once()
            ->andReturn('tester');
        $mock->shouldReceive('getModuleStatuses')
            ->once()
            ->andReturn(['tester' => false]);
        $mock->shouldReceive('toggleModule')
            ->once()
            ->with('tester', true, false)
            ->andReturn(true);
    });

    LaraDashboardServer::actingAs($this->superadmin, 'sanctum')
        ->tool(ActivateModuleTool::class, ['module_name' => 'tester'])
        ->assertOk()
        ->assertSee('Module activated successfully');
});

test('activate module mcp tool reports when module is already enabled', function () {
    $module = new Module([
        'id' => 'crm',
        'name' => 'crm',
        'title' => 'CRM',
        'version' => '1.0.0',
        'status' => true,
    ]);

    $this->mock(ModuleService::class, function ($mock) use ($module): void {
        $mock->shouldReceive('getModuleByName')
            ->with('crm')
            ->once()
            ->andReturn($module);
        $mock->shouldReceive('getModuleJsonName')
            ->with('crm')
            ->once()
            ->andReturn('crm');
        $mock->shouldReceive('getModuleStatuses')
            ->once()
            ->andReturn(['crm' => true]);
        $mock->shouldNotReceive('toggleModule');
    });

    LaraDashboardServer::actingAs($this->superadmin, 'sanctum')
        ->tool(ActivateModuleTool::class, ['module_name' => 'crm'])
        ->assertOk()
        ->assertSee('Module is already enabled');
});

test('activate module mcp tool rejects unknown modules', function () {
    $this->mock(ModuleService::class, function ($mock): void {
        $mock->shouldReceive('getModuleByName')
            ->with('missing-module')
            ->once()
            ->andReturn(null);
    });

    LaraDashboardServer::actingAs($this->superadmin, 'sanctum')
        ->tool(ActivateModuleTool::class, ['module_name' => 'missing-module'])
        ->assertSee('Module not found');
});

test('activate module mcp tool is blocked in demo mode', function () {
    config(['app.demo_mode' => true]);

    LaraDashboardServer::actingAs($this->superadmin, 'sanctum')
        ->tool(ActivateModuleTool::class, ['module_name' => 'crm'])
        ->assertSee('demo mode');
});

test('deactivate module mcp tool disables an enabled module', function () {
    $module = new Module([
        'id' => 'tester',
        'name' => 'tester',
        'title' => 'Tester',
        'version' => '1.0.0',
        'status' => true,
    ]);

    $this->mock(ModuleService::class, function ($mock) use ($module): void {
        $mock->shouldReceive('getModuleByName')
            ->with('tester')
            ->twice()
            ->andReturn($module);
        $mock->shouldReceive('getModuleJsonName')
            ->with('tester')
            ->once()
            ->andReturn('tester');
        $mock->shouldReceive('getModuleStatuses')
            ->once()
            ->andReturn(['tester' => true]);
        $mock->shouldReceive('toggleModule')
            ->once()
            ->with('tester', false)
            ->andReturn(true);
    });

    LaraDashboardServer::actingAs($this->superadmin, 'sanctum')
        ->tool(DeactivateModuleTool::class, ['module_name' => 'tester'])
        ->assertOk()
        ->assertSee('Module deactivated successfully');
});

test('deactivate module mcp tool reports when module is already disabled', function () {
    $module = new Module([
        'id' => 'tester',
        'name' => 'tester',
        'title' => 'Tester',
        'version' => '1.0.0',
        'status' => false,
    ]);

    $this->mock(ModuleService::class, function ($mock) use ($module): void {
        $mock->shouldReceive('getModuleByName')
            ->with('tester')
            ->once()
            ->andReturn($module);
        $mock->shouldReceive('getModuleJsonName')
            ->with('tester')
            ->once()
            ->andReturn('tester');
        $mock->shouldReceive('getModuleStatuses')
            ->once()
            ->andReturn(['tester' => false]);
        $mock->shouldNotReceive('toggleModule');
    });

    LaraDashboardServer::actingAs($this->superadmin, 'sanctum')
        ->tool(DeactivateModuleTool::class, ['module_name' => 'tester'])
        ->assertOk()
        ->assertSee('Module is already disabled');
});
