<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gate>
 */
class GateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'area_id' => fake()->randomElement(\App\Models\Area::pluck('id')),
            'name' => fake()->word(),
            'hc_id' => fake()->unique()->ean13(),
        ];
    }
}
