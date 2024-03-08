<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'table_name' => $this->faker->randomElements(['portfolios', 'services', 'sliders', 'categories'], 1)[0],
            'table_id' => $this->faker->numberBetween(1, 20),
            'path' => $this->faker->image(
                dir: 'public/storage/sliders',
                fullPath: false,
                randomize: false,
            ),
        ];
    }
}
