<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'address' => fake()->address(),
            'home_type_id' => fake()->randomElement(\App\Models\HomeType::pluck('id')),
            'community_id' => fake()->randomElement(\App\Models\Community::pluck('id'))
        ];
    }
}
