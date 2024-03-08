<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'icon' => "bi bi-" . $this->faker->randomElements(['briefcase', 'calendar', 'chat-dots', 'people', 'file-earmark-text', 'file-earmark-code', 'file-earmark-binary', 'file-earmark-zip', 'file-earmark-music', 'file-earmark-image', 'file-earmark-video', 'file-earmark-slides', 'file-earmark-pdf', 'file-earmark-word', 'file-earmark-excel', 'file-earmark-ppt', 'file-earmark-richtext', 'file-earmark-font', 'file-earmark-break', 'file-earmark-richtext'], 1)[0],
            'title' => [
                'en' => "Service " . $this->faker->word(),
                'ar' => "خدمة " . $this->faker->word(),
            ],
            'description' => [
                'en' => $this->faker->sentence(),
                'ar' => $this->faker->sentence(),
            ],
            'link' => $this->faker->url(),
        ];
    }
}
