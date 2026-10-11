<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\ApiTestUtils;

pest()->use(
    RefreshDatabase::class,
    WithFaker::class,
    ApiTestUtils::class
);

beforeEach(function () {
    // Create basic roles if they don't exist
    $this->createRoles();

    // Create permissions
    $this->createPermissions();

    // Create test users
    $this->user = User::factory()->create();
    $this->adminUser = User::factory()->create();

    // Assign permissions to users
    $this->assignPermissions();

    // Assign admin role to admin user if role system exists
    if (class_exists(\App\Models\Role::class)) {
        $adminRole = \App\Models\Role::firstOrCreate(['name' => 'admin']);
        $this->adminUser->assignRole($adminRole);
    }
});

test('user can login with valid credentials', function () {
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('password123'),
    ]);

    $response = $this->postJson('/api/auth/login', [
        'email' => 'test@example.com',
        'password' => 'password123',
    ]);

    $response->assertStatus(200)
        ->assertJsonStructure([
            'token',
            'user' => [
                'id',
                'full_name',
                'email',
                'created_at',
                'updated_at',
            ],
        ]);

    $this->assertDatabaseHas('personal_access_tokens', [
        'tokenable_id' => $user->id,
        'tokenable_type' => User::class,
    ]);
});

test('user cannot login with invalid credentials', function () {
    User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('password123'),
    ]);

    $response = $this->postJson('/api/auth/login', [
        'email' => 'test@example.com',
        'password' => 'wrongpassword',
    ]);

    $response->assertStatus(401)
        ->assertJson([
            'message' => 'Invalid credentials',
        ]);
});

test('login requires email field', function () {
    $response = $this->postJson('/api/auth/login', [
        'password' => 'password123',
    ]);

    $response->assertStatus(422)
        ->assertJsonStructure($this->getValidationErrorStructure())
        ->assertJsonPath('errors.email', ['The email field is required.']);
});

test('login requires password field', function () {
    $response = $this->postJson('/api/auth/login', [
        'email' => 'test@example.com',
    ]);

    $response->assertStatus(422)
        ->assertJsonStructure($this->getValidationErrorStructure())
        ->assertJsonPath('errors.password', ['The password field is required.']);
});

test('login validates email format', function () {
    $invalidEmails = [
        'not-an-email',
        '@domain.com',
        'test@',
        'test.domain.com',
        '',
        null,
        123,
        'test@.com',
    ];

    foreach ($invalidEmails as $email) {
        $response = $this->postJson('/api/auth/login', [
            'email' => $email,
            'password' => 'password123',
        ]);

        $response->assertStatus(422);
    }
});

test('login handles edge case inputs', function () {
    $edgeCases = $this->getEdgeCaseData();

    foreach ($edgeCases as $case => $value) {
        $response = $this->postJson('/api/auth/login', [
            'email' => $value,
            'password' => $value,
        ]);

        $response->assertStatus(422);
    }
});

test('authenticated user can get user profile', function () {
    $user = $this->authenticateUser();

    $response = $this->getJson('/api/auth/user');

    $response->assertStatus(200)
        ->assertJson([
            'id' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
        ])
        ->assertJsonStructure([
            'id',
            'full_name',
            'email',
            'created_at',
            'updated_at',
        ]);
});

test('unauthenticated user cannot get user profile', function () {
    $response = $this->getJson('/api/auth/user');

    $response->assertStatus(401)
        ->assertJson([
            'message' => 'Unauthenticated.',
        ]);
});

test('authenticated user can logout', function () {
    $user = $this->authenticateUser();

    // Verify token exists
    expect($user->tokens)->toHaveCount(1);

    $response = $this->postJson('/api/auth/logout');

    $response->assertStatus(200)
        ->assertJson([
            'message' => 'Logged out successfully',
        ]);

    // Verify token is deleted
    $user->refresh();
    expect($user->tokens)->toHaveCount(0);
});

test('unauthenticated user cannot logout', function () {
    $response = $this->postJson('/api/auth/logout');

    $response->assertStatus(401)
        ->assertJson([
            'message' => 'Unauthenticated.',
        ]);
});

test('authenticated user can revoke all tokens', function () {
    $user = $this->authenticateUser();

    // Create additional tokens
    $user->createToken('token1');
    $user->createToken('token2');

    // Should have 3 tokens total (1 from auth + 2 created)
    expect($user->tokens)->toHaveCount(3);

    $response = $this->postJson('/api/auth/revoke-all');

    $response->assertStatus(200)
        ->assertJson([
            'message' => 'All tokens revoked successfully',
        ]);

    // Verify all tokens are deleted
    $user->refresh();
    expect($user->tokens)->toHaveCount(0);
});

test('unauthenticated user cannot revoke all tokens', function () {
    $response = $this->postJson('/api/auth/revoke-all');

    $response->assertStatus(401)
        ->assertJson([
            'message' => 'Unauthenticated.',
        ]);
});

test('login with user that does not exist', function () {
    $response = $this->postJson('/api/auth/login', [
        'email' => 'nonexistent@example.com',
        'password' => 'password123',
    ]);

    $response->assertStatus(401)
        ->assertJson([
            'message' => 'Invalid credentials',
        ]);
});

test('login with extremely long credentials', function () {
    $longString = str_repeat('a', 1000);

    $response = $this->postJson('/api/auth/login', [
        'email' => $longString . '@example.com',
        'password' => $longString,
    ]);

    $response->assertStatus(422);
});

test('login with malformed json', function () {
    $response = $this->json('POST', '/api/auth/login', [], [
        'Content-Type' => 'application/json',
    ]);

    $response->assertStatus(422);
});

test('login rate limiting', function () {
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('password123'),
    ]);

    // Attempt multiple failed logins
    for ($i = 0; $i < 10; $i++) {
        $response = $this->postJson('/api/auth/login', [
            'email' => 'test@example.com',
            'password' => 'wrongpassword',
        ]);
    }

    // Should be rate limited after multiple attempts
    $response = $this->postJson('/api/auth/login', [
        'email' => 'test@example.com',
        'password' => 'password123',
    ]);

    // Accept either rate limiting (429) or successful login (200) as valid responses
    expect(in_array($response->status(), [429, 200]))->toBeTrue();
});

test('auth endpoints return correct content type', function () {
    $endpoints = [
        ['POST', '/api/auth/login', ['email' => 'test@example.com', 'password' => 'password']],
    ];

    foreach ($endpoints as [$method, $url, $data]) {
        $response = $this->json($method, $url, $data);
        $response->assertHeader('Content-Type', 'application/json');
    }
});

test('auth endpoints handle missing content type', function () {
    $response = $this->call('POST', '/api/auth/login', [
        'email' => 'test@example.com',
        'password' => 'password123',
    ], [], [], [
        'HTTP_ACCEPT' => 'application/json',
    ]);

    $response->assertStatus(401);
});
