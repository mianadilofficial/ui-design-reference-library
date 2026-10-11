<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('user with media create can create', function () {
    $user = User::factory()->create();

    \Spatie\Permission\Models\Permission::firstOrCreate([
        'name' => 'media.create',
        'guard_name' => 'web',
    ]);

    $user->givePermissionTo('media.create');

    $policy = app(\App\Policies\MediaPolicy::class);
    expect($policy->create($user))->toBeTrue();
});

test('user without media create cannot create', function () {
    $user = User::factory()->create();

    $policy = app(\App\Policies\MediaPolicy::class);
    expect($policy->create($user))->toBeFalse();
});
