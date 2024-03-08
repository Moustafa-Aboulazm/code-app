<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => [
                'en' => $this->faker->name(),
                'ar' => $this->faker->name(),
            ],
            'job' => [
                'en' => $this->faker->word(),
                'ar' => $this->faker->word(),
            ],
            'image' => $this->faker->word(),
            'social' => $this->faker->words(),
        ];
    }
}
