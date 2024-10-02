<?php

namespace Database\Factories;

use App\Models\Destination;
use App\Models\PointOfInterest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
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
            'point_of_interest_id' => PointOfInterest::factory() ,
            'duration' => $this->faker->randomElement(['1 hora', '2 horas', 'Medio día']),
            'schedule' => $this->faker->optional()->sentence,
            'price' => $this->faker->optional()->randomFloat(2, 0, 200),
        ];
    }
}
