<?php

namespace Database\Factories;

use App\Models\PointOfInterest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PointOfInterestMedia>
 */
class PointOfInterestMediaFactory extends Factory
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
            'media_type' => $this->faker->randomElement(['image', 'video']),
            'url' => $this->faker->imageUrl(),
            'caption' => $this->faker->optional()->sentence,
        ];
    }
}
