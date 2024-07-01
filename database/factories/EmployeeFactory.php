<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name'=> fake()->name,
            'Password'=> fake()->password,
            'Email'=> fake()->email,
            'Salary'=> fake()->numberBetween(30000, 60000),
            'Job'=> fake()->jobTitle,
        ];
    }
}
