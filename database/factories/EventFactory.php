<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('now', '+1 year');
        $endDate = (clone $startDate)->modify('+' . $this->faker->numberBetween(1, 5) . ' days');

        return [
            'destination_id' => Destination::factory(),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'schedule' => $this->faker->optional()->sentence,
            'price' => $this->faker->optional()->randomFloat(2, 0, 100),
        ];;
    }
}
