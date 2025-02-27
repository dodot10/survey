<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Surveyor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Surveyor>
 */
class SurveyorFactory extends Factory
{
    protected $model = Surveyor::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'position' => $this->faker->jobTitle,
        ];
    }
}
