<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SliderFactory extends Factory
{
    protected $model = Slider::class;

    public function definition(): array
    {
        return [
            'title' => [
                'en' => 'Title in English ' . $this->faker->word(),
                'ar' => 'Title in Arabic ' . $this->faker->word(),
            ],
            'description' => [
                'en' => 'Description in English ' . $this->faker->word(),
                'ar' => 'Description in Arabic ' . $this->faker->word(),
            ],
            'link' => $this->faker->url(),
            'image' => $this->faker->image(
                dir: 'public/storage/sliders',
                fullPath: false
            ),
            'status' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
