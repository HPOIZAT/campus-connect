<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'begin_at' => fake()->dateTime(),
            'end_at' => fake()->dateTime(),
            'description' => fake()->text(),
            'location' => fake()->address(),
            'campus_code' => fake()->unique(),
        ];
    }
}
