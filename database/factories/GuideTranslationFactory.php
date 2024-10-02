<?php

namespace Database\Factories;

use App\Models\Guide;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GuideTranslation>
 */
class GuideTranslationFactory extends Factory
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
            'guide_id' => Guide::factory(),
            'language' => $this->faker->randomElement(['es', 'en']),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
