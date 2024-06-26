<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'first_name' => fake()->name,
            'last_name'=> fake()->name,
            'contact_number'=> fake()->phoneNumber(),
            'gender' => fake()->randomElement(['male', 'female']),
            'birthdate' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'address'  => fake()->address(),
            'department_id' => fake()->numberBetween(1,5),
            'position_id'=> fake()->numberBetween(1,5),
            'company_id' => fake()->numberBetween(1,20),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'), 
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
