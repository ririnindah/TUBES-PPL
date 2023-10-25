<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mahasiswa>
 */
class mahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->numberBetween(1, 9999),
            'nama'=> $this->faker->name,
            'status'=> $this->faker->randomElement(['Aktif','Cuti', 'Mangkir', 'DO', 'Undur Diri']),
            'departemen'=>'Informatika',
            'fakultas'=>'Sains dan Matematika',
            'angkatan'=>$this->faker->randomElement(['17', '18', '19', '20', '21', '22', '23']),
            'jalur masuk'=>$this->faker->randomElement(['SNMPTN', 'SBMPTN', 'Mandiri', 'SPBUB']),
            'provinsi'=>$this->faker->state,
            'kabupaten'=>$this->faker->city,
            'alamat'=>$this->faker->address,
            'foto'=>$this->faker->text(10),
            'dsn_id'=>$this->faker->numberBetween(1,3)
        ];
    }
}
