<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test(
    'Login successful',
    function () {
        $page = visit('/admin/login');

        $page->assertSee('Sign In')
            ->fill('email', 'superadmin@example.com')
            ->fill('password', '12345678')
            ->click('Sign In')
            ->assertSee('Dashboard');
    }
);
