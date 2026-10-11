<?php

declare(strict_types=1);

use App\Livewire\Marketplace\MarketplaceModuleBrowser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\Support\Security\InteractsWithSecurityUsers;

pest()->use(RefreshDatabase::class);

uses(InteractsWithSecurityUsers::class);

beforeEach(function () {
    $this->setUpSecurityUsers();
    config(['app.demo_mode' => false]);
});

test('admin with module.create cannot install marketplace modules via livewire', function () {
    Livewire::actingAs($this->adminUser)
        ->test(MarketplaceModuleBrowser::class)
        ->call('installModule', 'evil-module', '1.0.0')
        ->assertForbidden();
});

test('superadmin can invoke marketplace install livewire action', function () {
    $this->superadminUser->syncPermissions(['module.create', 'module.view']);

    Http::fake([
        '*' => Http::response(['success' => false, 'message' => 'blocked in test'], 404),
    ]);

    Livewire::actingAs($this->superadminUser)
        ->test(MarketplaceModuleBrowser::class)
        ->call('installModule', 'test-module', '1.0.0')
        ->assertHasNoErrors();
});
