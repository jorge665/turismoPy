<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsTranslation>
 */
class NewsTranslationFactory extends Factory
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
            'news_id' => News::factory(),
            'language' => $this->faker->randomElement(['es', 'en']),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
