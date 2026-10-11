<?php

declare(strict_types=1);

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;

pest()->use(RefreshDatabase::class);

beforeEach(function () {
    $this->withoutMiddleware(VerifyCsrfToken::class);

    Permission::firstOrCreate(['name' => 'post.create', 'guard_name' => 'web']);
    Permission::firstOrCreate(['name' => 'post.edit', 'guard_name' => 'web']);

    $this->editor = User::factory()->create();
    $this->editor->assignRole(Role::firstOrCreate(['name' => Role::EDITOR, 'guard_name' => 'web']));
    $this->editor->syncPermissions(['post.create', 'post.edit']);

    $this->subscriber = User::factory()->create();
    $this->subscriber->assignRole(Role::firstOrCreate(['name' => Role::SUBSCRIBER, 'guard_name' => 'web']));
});

test('subscriber cannot fetch markdown from builder api', function () {
    $this->actingAs($this->subscriber)
        ->postJson(route('admin.api.builder.markdown.fetch'), [
            'url' => 'https://raw.githubusercontent.com/user/repo/main/README.md',
        ])
        ->assertForbidden();
});

test('editor cannot fetch markdown from private network urls', function () {
    $this->actingAs($this->editor)
        ->postJson(route('admin.api.builder.markdown.fetch'), [
            'url' => 'http://127.0.0.1/secret.txt',
        ])
        ->assertUnprocessable()
        ->assertJson([
            'success' => false,
            'error' => 'URL host is not allowed',
        ]);
});

test('editor cannot fetch markdown from unsupported external hosts', function () {
    $this->actingAs($this->editor)
        ->postJson(route('admin.api.builder.markdown.fetch'), [
            'url' => 'https://example.com/readme.md',
        ])
        ->assertUnprocessable()
        ->assertJson([
            'success' => false,
            'error' => 'URL host is not allowed',
        ]);
});
