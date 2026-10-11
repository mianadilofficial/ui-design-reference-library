<?php

declare(strict_types=1);

use App\Enums\Hooks\McpFilterHook;
use App\Models\User;
use App\Services\Mcp\McpRegistryService;
use App\Services\Mcp\McpTokenService;
use App\Support\Facades\Hook;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Tests\Fixtures\Mcp\SampleModuleTool;
use Tests\Support\McpRegistryTestHooks;

uses(RefreshDatabase::class);

test('modules can register mcp tools via hook', function () {
    Hook::addFilter(McpFilterHook::TOOLS, [McpRegistryTestHooks::class, 'registerSampleTool']);

    $definitions = app(McpRegistryService::class)->toolDefinitions();

    expect(collect($definitions)->pluck('name')->all())
        ->toContain('sample-module-tool')
        ->toContain('list-posts');

    Hook::removeFilter(McpFilterHook::TOOLS, [McpRegistryTestHooks::class, 'registerSampleTool']);
});

test('registered module tools appear grouped in settings metadata', function () {
    Hook::addFilter(McpFilterHook::TOOLS, [McpRegistryTestHooks::class, 'registerSampleTool']);

    $grouped = app(McpRegistryService::class)->groupedToolDefinitions();

    expect($grouped)->toHaveKey('Sample Module');
    expect(collect($grouped['Sample Module'])->pluck('name')->all())->toContain('sample-module-tool');

    Hook::removeFilter(McpFilterHook::TOOLS, [McpRegistryTestHooks::class, 'registerSampleTool']);
});

test('mcp server registry loads registered module tools', function () {
    Hook::addFilter(McpFilterHook::TOOLS, [McpRegistryTestHooks::class, 'registerSampleTool']);

    expect(app(McpRegistryService::class)->toolClasses())->toContain(SampleModuleTool::class);

    Hook::removeFilter(McpFilterHook::TOOLS, [McpRegistryTestHooks::class, 'registerSampleTool']);
});

test('modules can register ability permission mappings for tokens', function () {
    $user = User::factory()->create();

    Hook::addFilter(McpFilterHook::ABILITY_PERMISSION_MAP, [McpRegistryTestHooks::class, 'registerSampleAbility']);

    expect(app(McpTokenService::class)->resolveAbilitiesForUser($user))
        ->not->toContain('mcp:sample.read');

    Permission::firstOrCreate(['name' => 'sample.view', 'guard_name' => 'web']);
    $user->givePermissionTo('sample.view');

    expect(app(McpTokenService::class)->resolveAbilitiesForUser($user))
        ->toContain('mcp:sample.read');

    Hook::removeFilter(McpFilterHook::ABILITY_PERMISSION_MAP, [McpRegistryTestHooks::class, 'registerSampleAbility']);
});
