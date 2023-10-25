<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\mahasiswa;
use App\Models\dosenwali;
use App\Models\operator;
use App\Models\departemen;
use Illuminate\Database\Seeder;
// use PHPUnit\Framework\Constraint\Operator;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Mahasiswa::factory(5)->create();
        Dosenwali::factory(2)->create();
        Operator::factory(1)->create();
        Departemen::factory(2)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
