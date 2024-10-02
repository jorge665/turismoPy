<?php

namespace Database\Factories;

use App\Models\PointOfInterest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PointOfInterestTranslation>
 */
class PointOfInterestTranslationFactory extends Factory
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
            'point_of_interest_id' => PointOfInterest::factory(),
            'language' => $this->faker->randomElement(['es', 'en']),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
        ];
    }
}
