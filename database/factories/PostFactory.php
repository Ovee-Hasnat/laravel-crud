<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), // Generates a random sentence for the title
            'content' => $this->faker->paragraphs(3, true), // Generates multiple paragraphs for the content
            'user_id' => 1, // Creates a new User using User factory
            'category_id' => 1, // Creates a new Category using Category factory
        ];
    }
}
