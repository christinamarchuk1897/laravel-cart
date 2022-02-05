<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Genre::truncate();
        $categories = [
            [
                'name' => 'Sandbox',
            ],
            [
                'name' => 'Real-time strategy (RTS)',
            ],
            [
                'name' => 'Shooters (FPS and TPS)',
            ],
            [
                'name' => 'Multiplayer online battle arena (MOBA)',
            ],
            [
                'name' => 'Sports',
            ],
            [
                'name' => 'Role-playing games (RPG, ARPG, and more)',
            ],
            [
                'name' => 'Puzzlers and party games',
            ],
            [
                'name' => 'Action-adventure',
             ],
            [
                'name' => 'Survival and horror',

            ],
            [
                'name' => 'Platformer',
            ],
            [
                'name' => 'Card',
            ],
            [
                'name' => 'Strategy',
            ],
            [
                'name' => 'Racing',
            ],
            [
                'name' => 'Social',
            ],
            [
                'name' => 'Battle Royale',
            ],
            [
                'name' => 'Action RPG',
            ],
            [
                'name' => 'Fighting',
            ]
        ];

        foreach ($categories as $category) {
            Genre::create([
                'name' => $category['name'],
            ]);
        }
    }
}
