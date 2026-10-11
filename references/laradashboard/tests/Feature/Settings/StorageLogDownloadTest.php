<?php

declare(strict_types=1);

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Permission;

pest()->use(RefreshDatabase::class);

beforeEach(function () {
    File::ensureDirectoryExists(storage_path('logs'));

    $this->admin = User::factory()->create();
    $adminRole = Role::firstOrCreate(['name' => 'Superadmin', 'guard_name' => 'web']);

    Permission::firstOrCreate(['name' => 'settings.edit', 'guard_name' => 'web']);
    Permission::firstOrCreate(['name' => 'settings.view', 'guard_name' => 'web']);
    $adminRole->givePermissionTo(['settings.edit', 'settings.view']);
    $this->admin->assignRole($adminRole);

    $this->regularUser = User::factory()->create();

    $this->logPath = storage_path('logs/feature-download-test.log');
    File::put($this->logPath, 'downloadable log content');
});

afterEach(function () {
    if (File::exists($this->logPath)) {
        File::delete($this->logPath);
    }
});

test('authorized user can download a storage log file', function () {
    $response = $this->actingAs($this->admin)->get(route('admin.settings.logs.download', [
        'file' => 'logs/feature-download-test.log',
    ]));

    $response->assertOk();
    $response->assertDownload('feature-download-test.log');
});

test('unauthorized user cannot download storage log files', function () {
    $response = $this->actingAs($this->regularUser)->get(route('admin.settings.logs.download', [
        'file' => 'logs/feature-download-test.log',
    ]));

    $response->assertForbidden();
});

test('log download is blocked in demo mode', function () {
    config(['app.demo_mode' => true]);

    $response = $this->actingAs($this->admin)->get(route('admin.settings.logs.download', [
        'file' => 'logs/feature-download-test.log',
    ]));

    $response->assertRedirect();
    $response->assertSessionHas('error', __('Downloading log files is restricted in demo mode.'));
});

test('performance security settings page shows logs section', function () {
    $response = $this->actingAs($this->admin)->get(route('admin.settings.index', [
        'tab' => 'performance-security',
    ]));

    $response->assertOk();
    $response->assertSee(__('Logs'));
    $response->assertSee('feature-download-test.log');
});

test('missing log file returns back with error', function () {
    $response = $this->actingAs($this->admin)->get(route('admin.settings.logs.download', [
        'file' => 'logs/does-not-exist.log',
    ]));

    $response->assertRedirect();
    $response->assertSessionHas('error', __('Log file not found.'));
});
