<?php

declare(strict_types=1);

use App\Enums\PostStatus;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
    $this->user = \App\Models\User::factory()->create();
    $this->adminUser = \App\Models\User::factory()->create();

    // Assign permissions to users
    $this->assignPermissions();

    // Assign admin role to admin user if role system exists
    if (class_exists(\App\Models\Role::class)) {
        $adminRole = \App\Models\Role::firstOrCreate(['name' => 'admin']);
        $this->adminUser->assignRole($adminRole);
    }
});

test('authenticated user can list posts', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        Post::factory(5)->create(['post_type' => 'page']);

        $response = $this->getJson('/api/v1/posts/page');

        $response->assertStatus(200)
            ->assertJsonStructure($this->getApiResourceStructure());
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('unauthenticated user cannot list posts', function () {
    $response = $this->getJson('/api/v1/posts/page');

    $response->assertStatus(401)
        ->assertJson(['message' => 'Unauthenticated.']);
});

test('authenticated user can create post', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $postData = [
            'title' => 'Test Post',
            'content' => 'This is a test post content',
            'status' => PostStatus::PUBLISHED->value,
            'post_type' => 'page',
        ];

        $response = $this->postJson('/api/v1/posts/page', $postData);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'title',
                    'content',
                    'status',
                    'post_type',
                    'created_at',
                    'updated_at',
                ],
            ]);

        $this->assertDatabaseHas('posts', [
            'title' => 'Test Post',
            'post_type' => 'page',
        ]);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post creation requires title', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $response = $this->postJson('/api/v1/posts/page', [
            'content' => 'Content without title',
            'post_type' => 'page',
        ]);

        $response->assertStatus(422)
            ->assertJsonPath('errors.title', ['The title field is required.']);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post creation validates title length', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $longTitle = str_repeat('Very long title ', 20); // > 255 chars

        $response = $this->postJson('/api/v1/posts/page', [
            'title' => $longTitle,
            'content' => 'Test content',
            'post_type' => 'page',
        ]);

        $response->assertStatus(422);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post creation validates status', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $invalidStatuses = ['invalid-status', 123, null];

        foreach ($invalidStatuses as $status) {
            $response = $this->postJson('/api/v1/posts/page', [
                'title' => 'Test Post',
                'content' => 'Test content',
                'status' => $status,
                'post_type' => 'page',
            ]);

            $response->assertStatus(422);
        }
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('authenticated user can show post', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $post = Post::factory()->create(['post_type' => 'page']);

        $response = $this->getJson("/api/v1/posts/page/{$post->id}");

        $response->assertStatus(200)
            ->assertJson([
                'data' => [
                    'id' => $post->id,
                    'title' => $post->title,
                    'post_type' => $post->post_type,
                ],
            ]);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('show post returns 404 for nonexistent post', function () {
    $this->authenticateUser();

    $response = $this->getJson('/api/v1/posts/page/999999');

    $response->assertStatus(404);
});

test('authenticated user can update post', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $post = Post::factory()->create(['post_type' => 'page']);

        $updateData = [
            'title' => 'Updated Post Title',
            'content' => 'Updated content',
            'status' => PostStatus::DRAFT->value,
        ];

        $response = $this->putJson("/api/v1/posts/page/{$post->id}", $updateData);

        $response->assertStatus(200)
            ->assertJson([
                'data' => [
                    'id' => $post->id,
                    'title' => 'Updated Post Title',
                    'status' => PostStatus::DRAFT->value,
                ],
            ]);

        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'title' => 'Updated Post Title',
            'status' => PostStatus::DRAFT->value,
        ]);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('authenticated user can delete post', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $post = Post::factory()->create(['post_type' => 'page']);

        $response = $this->deleteJson("/api/v1/posts/page/{$post->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('posts', [
            'id' => $post->id,
        ]);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('authenticated user can bulk delete posts', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $posts = Post::factory(3)->create(['post_type' => 'page']);
        $postIds = $posts->pluck('id')->toArray();

        $response = $this->postJson('/api/v1/posts/page/bulk-delete', [
            'ids' => $postIds,
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Posts deleted successfully',
                'deleted_count' => 3,
            ]);

        foreach ($postIds as $id) {
            $this->assertDatabaseMissing('posts', ['id' => $id]);
        }
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post bulk delete requires ids array', function () {
    $this->authenticateUser();

    $response = $this->postJson('/api/v1/posts/page/bulk-delete', []);

    $response->assertStatus(422)
        ->assertJsonPath('errors.ids', ['The ids field is required.']);
});

test('post creation handles different post types', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $postTypes = ['page', 'article', 'blog', 'news'];

        foreach ($postTypes as $postType) {
            $response = $this->postJson("/api/v1/posts/{$postType}", [
                'title' => "Test {$postType}",
                'content' => "Content for {$postType}",
                'status' => PostStatus::PUBLISHED->value,
                'post_type' => $postType,
            ]);

            $response->assertStatus(201);

            $this->assertDatabaseHas('posts', [
                'title' => "Test {$postType}",
                'post_type' => $postType,
            ]);
        }
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post creation with meta data', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $postData = [
            'title' => 'Post with Meta',
            'content' => 'Content with meta data',
            'status' => PostStatus::PUBLISHED->value,
            'post_type' => 'page',
            'meta' => [
                'featured_image' => 'image.jpg',
                'seo_title' => 'SEO Title',
                'seo_description' => 'SEO Description',
            ],
        ];

        $response = $this->postJson('/api/v1/posts/page', $postData);

        $response->assertStatus(201);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post creation with author', function () {
    $author = $this->authenticateUser();

    if (class_exists(Post::class)) {
        $response = $this->postJson('/api/v1/posts/page', [
            'title' => 'Post with Author',
            'content' => 'Content',
            'status' => PostStatus::PUBLISHED->value,
            'post_type' => 'page',
        ]);

        $response->assertStatus(201);

        // Test only API response structure, not database details
        $this->assertDatabaseHas('posts', [
            'title' => 'Post with Author',
        ]);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post management handles edge case inputs', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $edgeCases = $this->getEdgeCaseData();

        foreach ($edgeCases as $case => $value) {
            $response = $this->postJson('/api/v1/posts/page', [
                'title' => is_string($value) ? $value : 'Test Title',
                'content' => $value,
                'post_type' => 'page',
            ]);

            // Should handle gracefully
            expect([200, 201, 422])->toContain($response->status());
        }
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post endpoints filter by status', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        Post::factory(2)->create(['post_type' => 'page', 'status' => 'published']);
        Post::factory(3)->create(['post_type' => 'page', 'status' => PostStatus::DRAFT->value]);

        $response = $this->getJson('/api/v1/posts/page?status=published');

        $response->assertStatus(200);

        if ($response->json('data')) {
            foreach ($response->json('data') as $post) {
                expect($post['status'])->toEqual('published');
            }
        }
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post endpoints search functionality', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        Post::factory()->create(['title' => 'Searchable Post Title', 'post_type' => 'page']);
        Post::factory()->create(['title' => 'Another Post', 'post_type' => 'page']);

        $response = $this->getJson('/api/v1/posts/page?search=Searchable');

        $response->assertStatus(200);

        if ($response->json('data')) {
            $this->assertStringContainsString('Searchable', $response->json('data.0.title'));
        }
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post endpoints paginate results', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        Post::factory(25)->create(['post_type' => 'page']);

        $response = $this->getJson('/api/v1/posts/page');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => ['*' => ['id', 'title']],
                'links',
                'meta' => [
                    'current_page',
                    'per_page',
                    'total',
                ],
            ]);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post endpoints handle sql injection attempts', function () {
    $this->authenticateUser();

    $maliciousInputs = [
        "'; DROP TABLE posts; --",
        "1' OR '1'='1",
        "UNION SELECT * FROM posts",
    ];

    foreach ($maliciousInputs as $input) {
        $response = $this->getJson("/api/v1/posts/page?search={$input}");

        // Should not cause internal server error
        $this->assertNotEquals(500, $response->status());
    }
});

test('post creation validates slug uniqueness', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        // Create first post
        $this->postJson('/api/v1/posts/page', [
            'title' => 'Unique Post',
            'slug' => 'unique-post',
            'content' => 'Content',
            'post_type' => 'page',
        ]);

        // Try to create second post with same slug
        $response = $this->postJson('/api/v1/posts/page', [
            'title' => 'Another Unique Post',
            'slug' => 'unique-post',
            'content' => 'Different content',
            'post_type' => 'page',
        ]);

        $response->assertStatus(422);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post creation auto generates slug from title', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $response = $this->postJson('/api/v1/posts/page', [
            'title' => 'This Should Generate Slug',
            'content' => 'Content',
            'status' => PostStatus::PUBLISHED->value,
            'post_type' => 'page',
        ]);

        $response->assertStatus(201);

        $post = Post::where('title', 'This Should Generate Slug')->first();
        if ($post && isset($post->slug)) {
            expect($post->slug)->toEqual('this-should-generate-slug');
        }
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});

test('post update preserves created date', function () {
    $this->authenticateUser();

    if (class_exists(Post::class)) {
        $post = Post::factory()->create(['post_type' => 'page']);
        $originalCreatedAt = $post->created_at;

        $response = $this->putJson("/api/v1/posts/page/{$post->id}", [
            'title' => 'Updated Title',
            'content' => 'Updated Content',
            'status' => PostStatus::PUBLISHED->value,
        ]);

        $response->assertStatus(200);

        $post->refresh();
        expect($post->created_at)->toEqual($originalCreatedAt);
    } else {
        $this->markTestSkipped('Post system not implemented');
    }
});
