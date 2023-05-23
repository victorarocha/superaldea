<?php

namespace Database\Factories;

use App\Nova\Community;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Area>
 */
class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // get a random organization for the area record.
            'community_id' => fake()->randomElement(\App\Models\Community::pluck('id')),
            'name' => fake()->word(),
            'hc_id' => fake()->unique()->ean13(),

        ];
    }
}
