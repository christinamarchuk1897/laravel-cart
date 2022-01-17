<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        $categories = [
            [
                'name' => 'Sandbox',
                'description' => 'In these games, players often have less concrete goals and narrative pathways to pursue. Instead of beating the boss and saving the princess, you may face a variety of tasks you can accomplish in a number of different ways. This draws players into more immersive experiences, encouraging experimentation with what may be unfamiliar mechanics.',
            ],
            [
                'name' => 'Real-time strategy (RTS)',
                'description' => 'In the archetypal RTS title, Dune II human and AI players control different factions and compete against each other simultaneously in “real time” hence the term “real-time strategy,” as opposed to turn-based strategy. These games typically include resource and map management, and they often feature a top-down view.',
            ],
            [
                'name' => 'Shooters (FPS and TPS)',
                'description' => 'There’s plenty of potential for overlap here, too, since many contemporary titles allow you to toggle between first and third-person viewpoints. Not only that, but most battle royale games – a sub-genre unto itself – operate as either first or third-person shooters, including Fortnite and PlayerUnknown’s Battlegrounds.',
            ],
            [
                'name' => 'Multiplayer online battle arena (MOBA)',
                'description' => 'MOBA games also prioritize multiplayer and team play. While some well-known titles feature AI-controlled elements, you usually play with and compete against other human players to meet a set of victory conditions.',
            ],
            [
                'name' => 'Simulation and sports',
                'description' => 'These genres have evolved a lot over the years and you may actually see them in the same light. But it’s only with advances in graphics technology that they’ve begun to offer unique immersive experiences. The latest iterations provide impressive levels of detail and showcase just how much is possible with games.',
            ],
            [
                'name' => 'Role-playing games (RPG, ARPG, and more)',
                'description' => 'The basic premise of the role-playing game is simple and ubiquitous in numerous games: you create or take control of a character that you can then level up through experience points. RPGs are a cornerstone of gaming, but no single game can represent the genre because it’s grown and blossomed into numerous sub-genres. With that in mind, here are the most popular sub-genres with a short explanation for each.',
            ],
            [
                'name' => 'Puzzlers and party games',
                'description' => 'Puzzlers and party games also have a significant overlap, with both emphasizing game mechanics. You can expect to play a game based on a theme or a traditional tabletop game with particular rule sets.',
            ],
            [
                'name' => 'Action-adventure',
                'description' => 'Among the earliest recognizable hybrid genres, action-adventure games have a deep focus on plot and combat through story involvement and tight gameplay mechanics. As a result, many games can fit into this category, including the classic Legend of Zelda franchise that paved the way for numerous franchises.',
            ],
            [
                'name' => 'Survival and horror',
                'description' => 'Survival and horror games have a lot of overlap, to the point that they even created their own sub-genre (survival horror). In particular, horror games often share some basic features with their survival counterparts, though the reverse is less often true. As developers add more FPS and conventional shooter features to certain horror and survival titles, there’s even ongoing debate about how to define these games.',
            ],
            [
                'name' => 'Platformer',
                'description' => 'Looking for a genre that hasn’t changed much in concept over the years? When it comes to nostalgia and devotion to craft, the platformer genre covers a huge variety of games that still proudly showcase their roots in the earliest 2D side-scrollers. Platformers involve running, climbing, and jumping as the player explores and works their way through challenging levels.',
            ],

        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'description' => $category['description'],
            ]);
        }
    }
}
