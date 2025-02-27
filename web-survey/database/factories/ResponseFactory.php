<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Survey;
use App\Models\Response;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Response>
 */
class ResponseFactory extends Factory
{
    protected $model = Response::class;

    public function definition(): array
    {
        return [
            'survey_id' => Survey::query()->inRandomOrder()->first()->id ?? Survey::factory(),
            'user_id'   => User::query()->inRandomOrder()->first()->id ?? User::factory(),
            'answers'   => json_encode([fake()->sentence()]), // 🟢 Format JSON valid untuk PostgreSQL
        ];
        
    }
}
