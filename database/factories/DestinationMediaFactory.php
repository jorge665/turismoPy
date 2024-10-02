<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DestinationMedia>
 */
class DestinationMediaFactory extends Factory
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
            'media_type' => $this->faker->randomElement(['image', 'video']),
            'url' => $this->faker->imageUrl(),
            'caption' => $this->faker->optional()->sentence,
        ];
    }
}
