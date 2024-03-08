<?php

namespace Database\Seeders;

use App\Enum\DefaultData;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $cat = [
            [
                "name" => [
                    "en" => "Web",
                    "ar" => "ويب"
                ],
                "status" => DefaultData::ACTIVE
            ],
            [
                "name" => [
                    "en" => "Mobile",
                    "ar" => "التطبيقات المحمولة"
                ],
                "status" => DefaultData::ACTIVE
            ],
            [
                "name" => [
                    "en" => "UI/UX",
                    "ar" => "واجهة المستخدم / تجربة المستخدم"
                ],
                "status" => DefaultData::ACTIVE
            ],
        ];

        foreach ($cat as $c) {
            Category::firstOrCreate($c);
        }
    }
}
