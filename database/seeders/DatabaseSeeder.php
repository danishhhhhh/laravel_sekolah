<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kelas;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory(100)->create();

        Kelas::create([
            'nama' => '10 PPLG 1'
        ]);

        Kelas::create([
            'nama' => '10 PPLG 2'
        ]);

        Kelas::create([
            'nama' => '11 PPLG 1'
        ]);

        Kelas::create([
            'nama' => '11 PPLG 2'
        ]);
    }
}
