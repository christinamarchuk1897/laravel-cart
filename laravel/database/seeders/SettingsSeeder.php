<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::truncate();

        $settings = [
            ['name' => 'Create Product'],
            ['name' => 'Edit Product']
        ];

        foreach ($settings as $setting) {
            Settings::create([
                'name' => $setting['name'],
            ]);
        }
    }
}
