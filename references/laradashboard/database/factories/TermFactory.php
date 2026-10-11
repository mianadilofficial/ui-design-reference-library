<?php

namespace Database\Factories;

use App\Models\Term;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Term>
 */
class TermFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Term::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'slug' => $this->faker->unique()->slug(),
            'taxonomy' => $this->faker->randomElement(['category', 'tag']),
            'description' => $this->faker->sentence(),
            'parent_id' => null,
        ];
    }

    /**
     * Indicate that the term is a category.
     */
    public function category(): static
    {
        return $this->state(fn (array $attributes) => [
            'taxonomy' => 'category',
        ]);
    }

    /**
     * Indicate that the term is a tag.
     */
    public function tag(): static
    {
        return $this->state(fn (array $attributes) => [
            'taxonomy' => 'tag',
        ]);
    }
}
