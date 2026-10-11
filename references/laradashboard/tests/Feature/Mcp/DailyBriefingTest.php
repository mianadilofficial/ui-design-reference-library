<?php

declare(strict_types=1);

use App\Enums\PostStatus;
use App\Mcp\Briefing\Providers\CoreBriefingProvider;
use App\Mcp\Servers\LaraDashboardServer;
use App\Mcp\Tools\GetDailyBriefingTool;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Services\Mcp\McpBriefingService;
use App\Services\Mcp\McpRegistryService;
use App\Services\Mcp\McpTokenService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;

uses(RefreshDatabase::class);

beforeEach(function () {
    foreach (['dashboard.view', 'post.view', 'settings.edit'] as $permission) {
        Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
    }

    $this->user = User::factory()->create();
    $role = Role::firstOrCreate(['name' => Role::ADMIN, 'guard_name' => 'web']);
    $this->user->assignRole($role);
    $this->user->syncPermissions(['dashboard.view', 'post.view', 'settings.edit']);

    app(McpTokenService::class)->createToken($this->user);
    $accessToken = $this->user->tokens()->latest()->first();
    $this->user->withAccessToken($accessToken);

    $this->actingAs($this->user);
});

test('daily briefing tool is registered in mcp registry', function () {
    expect(app(McpRegistryService::class)->toolClasses())->toContain(GetDailyBriefingTool::class);

    $definitions = collect(app(McpRegistryService::class)->toolDefinitions());

    expect($definitions->pluck('name')->all())->toContain('get-daily-briefing');
});

test('core briefing provider is registered', function () {
    $providers = app(McpBriefingService::class)->providerClasses();

    expect($providers)->toContain(CoreBriefingProvider::class);
});

test('get daily briefing mcp tool returns structured response', function () {
    LaraDashboardServer::actingAs($this->user, 'sanctum')
        ->tool(GetDailyBriefingTool::class, [])
        ->assertOk()
        ->assertSee('greeting')
        ->assertSee('generated_at')
        ->assertSee('summary')
        ->assertSee('sections')
        ->assertSee('all_clear');
});

test('daily briefing includes pending posts for authorized users', function () {
    Post::factory()->create([
        'title' => 'Briefing Pending Post',
        'user_id' => $this->user->id,
        'status' => PostStatus::PENDING->value,
        'post_type' => 'post',
    ]);

    LaraDashboardServer::actingAs($this->user, 'sanctum')
        ->tool(GetDailyBriefingTool::class, [])
        ->assertOk()
        ->assertSee('Briefing Pending Post')
        ->assertSee('core_posts_pending_review');
});

test('daily briefing respects section filter', function () {
    Post::factory()->create([
        'title' => 'Hidden By Section Filter',
        'user_id' => $this->user->id,
        'status' => PostStatus::PENDING->value,
        'post_type' => 'post',
    ]);

    LaraDashboardServer::actingAs($this->user, 'sanctum')
        ->tool(GetDailyBriefingTool::class, ['sections' => ['crm']])
        ->assertOk()
        ->assertDontSee('Hidden By Section Filter')
        ->assertDontSee('core_posts_pending_review');
});
