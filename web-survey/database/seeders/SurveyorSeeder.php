<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Surveyor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SurveyorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // 🔹 Ambil daftar user yang belum menjadi surveyor
        $users = User::doesntHave('surveyor')->take(5)->get();

        foreach ($users as $user) {
            Surveyor::create([
                'user_id' => $user->id,
                'position' => fake()->jobTitle(), // Menggunakan Faker untuk posisi
            ]);
        }
    }
}
