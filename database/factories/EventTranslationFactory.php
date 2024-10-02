<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventTranslation>
 */
class EventTranslationFactory extends Factory
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
            'event_id' => Event::factory(),
            'language' => $this->faker->randomElement(['es', 'en']),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
        ];
    }
}
