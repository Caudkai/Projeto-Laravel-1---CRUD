<?php

namespace Database\Factories;



use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classroom;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
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
            'name' => $this->faker->sentence(3),       // título fake com 3 palavras
           'email' => $this->faker->unique()->safeEmail(), // email fake único
            'classroom_id' => Classroom::factory(),       // relaciona automaticamente com uma classroom
        ];
    }
}