<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPostTranslation>
 */
class BlogPostTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'blog_post_id' => BlogPost::factory(),
            'language' => $this->faker->randomElement(['es', 'en']),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
