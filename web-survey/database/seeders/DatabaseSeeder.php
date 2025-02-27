<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Survey;
use App\Models\Response;
use App\Models\Surveyor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // }

    public function run(): void
    {
        // // 🔹 Nonaktifkan foreign key constraints sementara
        // Schema::disableForeignKeyConstraints();

        // // 🔹 Bersihkan semua tabel agar tidak ada duplikasi data
        // Response::truncate();
        // Surveyor::truncate();
        // Survey::truncate();
        // User::truncate();

        // // 🔹 Aktifkan kembali foreign key constraints setelah truncate
        // Schema::enableForeignKeyConstraints();

        // // 🔹 Buat 10 user secara random
        // $users = User::factory(10)->create();

        // // 🔹 Buat 1 user spesifik untuk testing
        // $testUser = User::factory()->create([
        //     'fullname' => 'Test User',
        //     'username' => 'testuser',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('1234'),
        // ]);

        // // 🔹 Buat 5 survey dengan "created_by" dari testUser
        // $surveys = Survey::factory(5)->create([
        //     'created_by' => $testUser->id,
        // ]);

        // // 🔹 Ambil 5 user unik sebagai surveyor (pastikan tidak duplikat)
        // $surveyors = $users->shuffle()->take(5);
        // foreach ($surveyors as $user) {
        //     Surveyor::create([
        //         'user_id' => $user->id, // 🟢 Pastikan tidak duplikat
        //         'position' => fake()->jobTitle(),
        //     ]);
        // }

        // // 🔹 Buat 20 response dengan (survey_id, user_id) yang unik
        // $usedCombinations = [];
        // for ($i = 0; $i < 20; $i++) {
        //     do {
        //         $surveyId = $surveys->random()->id;
        //         $userId = $users->random()->id;
        //         $key = $surveyId . '-' . $userId;
        //     } while (isset($usedCombinations[$key])); // Pastikan kombinasi unik

        //     $usedCombinations[$key] = true;

        //     Response::create([
        //         'survey_id' => $surveyId,
        //         'user_id' => $userId,
        //         'answers' => json_encode([fake()->sentence()]), // 🟢 Format JSON Valid
        //     ]);

            $this->call([
                RolePermissionSeeder::class, 
                UserSeeder::class,
                SurveySeeder::class,
                SurveyorSeeder::class,
                ResponseSeeder::class,
            ]);
    //     }
    }
}
