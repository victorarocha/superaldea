<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Define fake data factory for testing.
            'name' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'photo_path' => fake()->image('storage/app/public',300,300,'avatars', false),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => fake()->dateTimeThisMonth(),
            'password' => fake()->password(),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'birthdate' => fake()->date('Y-m-d', '2000-01-01'),
            'hc_id' => fake()->unique()->ean13(),

        ];
    }
}
