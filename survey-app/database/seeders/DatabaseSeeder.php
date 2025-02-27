<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class, // Pastikan ini ada
            // UserSeeder::class, // Pastikan ini ada
            // SurveySeeder::class, // Tambahkan jika ada
        ]);
    }
}
