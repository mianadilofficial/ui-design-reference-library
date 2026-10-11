<?php

declare(strict_types=1);

use App\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use App\Models\User;

pest()->use(RefreshDatabase::class);

it('extends spatie role', function () {
    $role = new Role();
    expect($role)->toBeInstanceOf(Spatie\Permission\Models\Role::class);
});

it('uses query builder trait', function () {
    $role = new Role();
    expect(in_array('App\Concerns\QueryBuilderTrait', class_uses_recursive($role)))->toBeTrue();
});

it('can create role with permissions', function () {
    $permission1 = Permission::create(['name' => 'test.permission1']);
    $permission2 = Permission::create(['name' => 'test.permission2']);
    $role = Role::create(['name' => 'test-role']);
    $role->syncPermissions([$permission1->id, $permission2->id]);
    expect($role->hasPermissionTo('test.permission1', 'web'))->toBeTrue();
    expect($role->hasPermissionTo('test.permission2', 'web'))->toBeTrue();
});

it('can be assigned to users', function () {
    $role = Role::create(['name' => 'test-role']);
    $user = User::factory()->create();
    $user->assignRole($role);
    expect($user->hasRole('test-role'))->toBeTrue();
});
