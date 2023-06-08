<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Door>
 */
class DoorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_id' => fake()->randomElement(\App\Models\Room::pluck('id')),
            'name' => fake()->word(),
            'hc_id' => fake()->unique()->ean13()
        ];
    }
}
