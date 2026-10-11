<?php

declare(strict_types=1);

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Spatie\Permission\Models\Permission;
use Tests\Support\Security\InteractsWithSecurityUsers;

pest()->use(RefreshDatabase::class);

uses(InteractsWithSecurityUsers::class);

beforeEach(function () {
    $this->withoutMiddleware(VerifyCsrfToken::class);
    $this->setUpSecurityUsers();

    Permission::firstOrCreate(['name' => 'post.create', 'guard_name' => 'web']);
    Permission::firstOrCreate(['name' => 'post.edit', 'guard_name' => 'web']);
    Permission::firstOrCreate(['name' => 'post.view', 'guard_name' => 'web']);

    $this->editorUser = $this->createUserWithRole(Role::EDITOR, ['post.create', 'post.edit', 'post.view']);

    $this->subscriberUser = User::factory()->create();
    $this->subscriberUser->assignRole(
        Role::firstOrCreate(['name' => Role::SUBSCRIBER, 'guard_name' => 'web'])
    );
});

test('subscriber cannot upload post builder images', function () {
    $file = UploadedFile::fake()->image('photo.gif');

    $this->actingAs($this->subscriberUser)
        ->post(route('admin.posts.upload-image', ['postType' => 'post']), [
            'image' => $file,
        ])
        ->assertForbidden();
});

test('editor with post permissions can upload post builder images', function () {
    $file = UploadedFile::fake()->image('photo.gif');

    $this->actingAs($this->editorUser)
        ->post(route('admin.posts.upload-image', ['postType' => 'post']), [
            'image' => $file,
        ])
        ->assertOk()
        ->assertJson(['success' => true]);
});

test('post builder image upload stores a safe extension from mime type', function () {
    $file = UploadedFile::fake()->create('evil.pht', 100, 'image/gif');

    $response = $this->actingAs($this->editorUser)
        ->post(route('admin.posts.upload-image', ['postType' => 'post']), [
            'image' => $file,
        ]);

    $response->assertOk();

    $url = $response->json('url');
    expect($url)->toContain('.gif');
    expect($url)->not->toContain('.pht');
});
