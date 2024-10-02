<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
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
            'id' => $this->faker->uuid,
            'type' => $this->faker->word,
            'notifiable_type' => User::class,
            'notifiable_id' => User::factory(),
            'data' => [],
            'read_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
