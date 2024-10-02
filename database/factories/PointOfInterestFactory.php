<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PointOfInterest>
 */
class PointOfInterestFactory extends Factory
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
            'destination_id' => Destination::factory(),
            'latitude' => $this->faker->latitude(-27, -19),
            'longitude' => $this->faker->longitude(-63, -54),
            'accessibility_details' => $this->faker->optional()->sentence,
            'opening_hours' => $this->faker->optional()->sentence,
            'entry_fee' => $this->faker->optional()->randomFloat(2, 0, 100),
        ];
    }
}
