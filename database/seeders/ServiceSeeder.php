<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' =>[
                    'en' => 'Web Development',
                    'ar' => 'تطوير الويب',
                ],
                'description' => [
                    'en' => 'We provide web development services.',
                    'ar' => 'نحن نقدم خدمات تطوير الويب.',

                ],
                'link' => '#',
                'icon' => 'bi bi-laptop',
            ],
            [
                'title' => [
                    'en' => 'Mobile Development',
                    'ar' => 'تطوير الجوال',
                ],
                'description' => [
                    'en' => 'We provide mobile development services.',
                    'ar' => 'نحن نقدم خدمات تطوير الجوال.',
                ],
                'link' => '#',
                'icon' => 'bi bi-phone',
            ],
            [
                'title' => [
                    'en' => 'UI/UX Design',
                    'ar' => 'تصميم واجهة المستخدم / تجربة المستخدم',
                ],
                'description' => [
                    'en' => 'We provide UI/UX design services.',
                    'ar' => 'نحن نقدم خدمات تصميم واجهة المستخدم / تجربة المستخدم.',
                ],
                'link' => '#',
                'icon' => 'bi bi-palette',
            ],
        ];

        foreach ($services as $service) {
            \App\Models\Service::firstOrCreate($service);
        }
    }
}
