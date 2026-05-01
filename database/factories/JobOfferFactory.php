<?php

namespace Database\Factories;

use App\Models\JobOffer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobOffer>
 */
class JobOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(),
            'salary' => fake()->numberBetween(30000, 150000),
            'location' => fake()->city(),
            'category' => fake()->randomElement(JobOffer::$categories),
            'experience_Level' => fake()->randomElement(JobOffer::$experience)
        ];
    }
}
