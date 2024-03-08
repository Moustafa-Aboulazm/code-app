<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            [
                "name" => [
                    "en" => "Mahmoud Almalah",
                    "ar" => "محمود الملاح",
                ],
                "job" => [
                    "en" => "Full Stack Developer",
                    "ar" => "مطور ويب",
                ],
                "social" => [
                    [
                        "url" => "https://www.facebook.com/mahmoud.almalah.796",
                        "icon" => "bi bi-facebook",
                    ],
                    [
                        "url" => "https://www.linkedin.com/in/mamahmoud-allah-559408176/",
                        "icon" => "bi bi-linkedin",
                    ],
                    [
                        "url" => "https://github.com/MahmoudAlmalah-ENG/",
                        "icon" => "bi bi-github",
                    ]
                ],
                "image" => "team-1.jpg",
            ]
        ];

        foreach ($teams as $team) {
            \App\Models\Team::create($team);
        }
    }
}
