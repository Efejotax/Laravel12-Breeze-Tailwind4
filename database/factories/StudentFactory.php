<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'    => $this->faker->name(),
            'phone'   => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'email'   => $this->faker->unique()->safeEmail(),
            'curso'   => $this->faker->randomElement(['1º ESO', '2º ESO', '3º ESO', '4º ESO', '1º Bach', '2º Bach']),
        ];
    }
}
