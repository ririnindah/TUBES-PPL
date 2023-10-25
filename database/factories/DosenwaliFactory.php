<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dosenwali>
 */
class DosenwaliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip' => $this->faker->numberBetween(1, 9999),
            'nama'=> $this->faker->name,
            'departemen'=>'Informatika',
            'fakultas'=>'Sains dan Matematika',
        ];
    }
}
