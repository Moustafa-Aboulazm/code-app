<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PortfolioFactory extends Factory
{
    protected $model = Portfolio::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => [
                'en' => $this->faker->word(),
                'ar' => $this->faker->word(),
            ],
            'description' => [
                'en' => $this->faker->word(),
                'ar' => $this->faker->word(),
            ],
            'client' => [
                'en' => $this->faker->name(),
                'ar' => $this->faker->name(),
            ],
            'date' => $this->faker->date(),
            'links' => [
                [
                    'name' => 'github',
                    'link' => 'https://github.com',
                ],
                [
                    'name' => 'website',
                    'link' => 'https://website.com',
                ],
                [
                    'name' => 'playstore',
                    'link' => 'https://playstore.com',
                ],
            ],
            'category_id' => $this->faker->numberBetween(1, 6),
            'status' => true
        ];
    }
}
