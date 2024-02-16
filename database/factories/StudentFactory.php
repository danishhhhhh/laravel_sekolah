<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
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
            'nis' => fake()->unique()->numberBetween(1, 10000),
            'nama' => fake()->name(),
            'kelas' => fake()->numberBetween(1, 4),
            'tgl_lahir' => now(),
            'alamat' => fake()->address(),
        ];
    }
}
