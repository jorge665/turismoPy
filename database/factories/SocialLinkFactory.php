<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialLink>
 */
class SocialLinkFactory extends Factory
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
            'platform' => $this->faker->randomElement(['Facebook', 'Twitter', 'Instagram']),
            'url' => $this->faker->url,
            'destination_id' => $this->faker->boolean ? Destination::factory() : null,
        ];
    }
}
