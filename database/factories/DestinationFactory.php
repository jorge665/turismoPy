<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_id' => City::factory(),
            'latitude' => $this->faker->latitude(-63, -54),
            'longitude' => $this->faker->longitude(-63, -54),
        ];
    }
}
