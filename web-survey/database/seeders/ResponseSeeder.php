<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Survey;
use App\Models\Response;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $responses = [
            ['survey_id' => 3, 'user_id' => 8, 'answers' => json_encode(['Dignissimos eveniet error assumenda quibusdam.'])],
            // Tambahkan data lainnya...
        ];

        foreach ($responses as $response) {
            // Cek apakah sudah ada data dengan survey_id dan user_id yang sama
            $exists = DB::table('responses')
                ->where('survey_id', $response['survey_id'])
                ->where('user_id', $response['user_id'])
                ->exists();

            if (!$exists) {
                DB::table('responses')->insert($response);
            }
        }
    }
}
