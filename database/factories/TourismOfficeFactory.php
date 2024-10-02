<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TourismOffice>
 */
class TourismOfficeFactory extends Factory
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
            'address' => $this->faker->address,
            'phone' => $this->faker->optional()->phoneNumber,
            'email' => $this->faker->optional()->safeEmail,
            'latitude' => $this->faker->latitude(-27, -19),
            'longitude' => $this->faker->longitude(-63, -54),
        ];
    }
}
