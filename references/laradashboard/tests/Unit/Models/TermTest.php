<?php

declare(strict_types=1);

use App\Enums\PostStatus;
use App\Models\Post;
use App\Models\Taxonomy;
use App\Models\Term;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

it('has fillable attributes', function () {
    $term = new Term();
    expect($term->getFillable())->toEqual([
        'name',
        'slug',
        'taxonomy',
        'description',
        'parent_id',
        'count',
    ]);
});

it('auto generates slug when creating', function () {
    $term = Term::create([
        'name' => 'Test Term',
        'taxonomy' => 'category',
    ]);
    expect($term->slug)->toEqual('test-term');
});

it('auto generates slug when updating name with empty slug', function () {
    $term = Term::create([
        'name' => 'Test Term',
        'taxonomy' => 'category',
        'slug' => 'custom-slug',
    ]);
    expect($term->slug)->toEqual('custom-slug');
    expect($term)->not->toBeNull();
    expect($term)->toBeInstanceOf(Term::class);
    $term->update([
        'name' => 'Updated Term',
        'slug' => '',
    ]);
    $refreshedTerm = $term->fresh();
    expect($refreshedTerm)->not->toBeNull();
    expect($refreshedTerm->slug)->toEqual('updated-term');
});

it('has taxonomy relationship', function () {
    $taxonomy = Taxonomy::create([
        'name' => 'test_taxonomy',
        'label' => 'Test Taxonomy',
        'description' => 'Test taxonomy description',
        'label_singular' => 'Test Taxonomy',
    ]);
    $term = Term::create([
        'name' => 'Test Term',
        'taxonomy' => 'test_taxonomy',
    ]);
    $taxonomyModel = $term->taxonomyModel()->first();
    expect($taxonomyModel->name)->toEqual($taxonomy->name);
});

it('has parent and children relationships', function () {
    $parent = Term::create([
        'name' => 'Parent Term',
        'taxonomy' => 'category',
    ]);
    $child = Term::create([
        'name' => 'Child Term',
        'taxonomy' => 'category',
        'parent_id' => $parent->id,
    ]);
    expect($child->parent)->toBeInstanceOf(Term::class);
    expect($child->parent->id)->toEqual($parent->id);
    expect($parent->children)->toHaveCount(1);
    expect($parent->children->first()->id)->toEqual($child->id);
});

it('has posts relationship', function () {
    $user = User::factory()->create();
    $term = Term::create([
        'name' => 'Test Term',
        'taxonomy' => 'category',
    ]);
    $post = Post::create([
        'title' => 'Test Post',
        'post_type' => 'post',
        'content' => 'Test content',
        'status' => PostStatus::PUBLISHED->value,
        'user_id' => $user->id,
    ]);
    expect($term)->not->toBeNull();
    expect($post)->not->toBeNull();
    expect($term)->toBeInstanceOf(Term::class);
    expect($post)->toBeInstanceOf(Post::class);
    $termId = $term->getKey();
    $postId = $post->getKey();
    expect($termId)->not->toBeNull();
    expect($postId)->not->toBeNull();
    $post->terms()->attach($termId);
    $posts = $term->posts()->get();
    expect($posts)->toHaveCount(1);
    expect($posts->first()->getKey())->toEqual($postId);
});
