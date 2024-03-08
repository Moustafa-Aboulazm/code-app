<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'title' => [
                    'en' => 'We provide you with the best services at reasonable prices',
                    'ar' => 'نوفر لكم أفضل الخدمات مع اسعار مناسبة',
                ],
                'description' => [
                    'en' => 'We are proud to provide you with the best services at a high level of professionalism',
                    'ar' => 'نفتخر بتقديم افضل الخدمات لكم باحترافية عالية',
                ],
                'image' => "slide-1.jpg",
                'link' => 'https://www.google.com',
                'status' => true
            ],
            [
                'title' => [
                    'en' => 'We provide you with the best services at reasonable prices',
                    'ar' => 'نوفر لكم أفضل الخدمات مع اسعار مناسبة',
                ],
                'description' => [
                    'en' => 'We are proud to provide you with the best services at a high level of professionalism',
                    'ar' => 'نفتخر بتقديم افضل الخدمات لكم باحترافية عالية',
                ],
                'image' => "slide-2.jpg",
                'link' => 'https://www.google.com',
                'status' => true
            ],
            [
                'title' => [
                    'en' => 'We provide you with the best services at reasonable prices',
                    'ar' => 'نوفر لكم أفضل الخدمات مع اسعار مناسبة',
                ],
                'description' => [
                    'en' => 'We are proud to provide you with the best services at a high level of professionalism',
                    'ar' => 'نفتخر بتقديم افضل الخدمات لكم باحترافية عالية',
                ],
                'image' => "slide-3.jpg",
                'link' => 'https://www.google.com',
                'status' => true
            ]
        ];

        foreach ($data as $item) {
            Slider::create($item);
        }
    }
}
