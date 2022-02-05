<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Platform;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platform::truncate();

        $platforms = [
            ['name' => 'PC (WINDOWS)'],
            ['name' => 'Web Browser'],
            ['name' => 'PS4'],
            ['name' => 'PS5'],
            ['name' => 'Xbox'],
        ];

        foreach ($platforms as $platform) {
            Platform::create([
                'name' => $platform['name']
            ]);
        }
    }
}
