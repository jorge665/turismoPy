<?php

namespace Database\Factories;

use App\Models\TourismOffice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OfficeTranslation>
 */
class OfficeTranslationFactory extends Factory
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
            'tourism_office_id' => TourismOffice::factory(),
            'language' => $this->faker->randomElement(['es', 'en']),
            'name' => $this->faker->company,
            'description' => $this->faker->optional()->paragraph,
        ];
    }
}
