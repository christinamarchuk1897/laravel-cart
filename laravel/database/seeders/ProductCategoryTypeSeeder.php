<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductCategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::where('genre', 'Action RPG')
       ->update([
           'category_id' => 16
        ]);

        Product::where('genre', 'Battle Royale')
       ->update([
           'category_id' => 15
        ]);
        Product::where('genre', 'Social')
       ->update([
           'category_id' => 14
        ]);
        Product::where('genre', 'Racing')
       ->update([
           'category_id' => 13
        ]);
         Product::where('genre', 'Strategy')
       ->update([
           'category_id' => 12
        ]);
         Product::where('genre', 'Card')
       ->update([
           'category_id' => 11
        ]);
         Product::where('genre', 'Card Game')
       ->update([
           'category_id' => 11
        ]);
         Product::where('genre', 'Platformer')
       ->update([
           'category_id' => 10
        ]);
        Product::where('genre', 'Shooter')
       ->update([
           'category_id' => 3
        ]);
        Product::where('genre', 'MMORPG')
       ->update([
           'category_id' => 6
        ]);
        Product::where('genre', 'MMO')
       ->update([
           'category_id' => 6
        ]);
        Product::where('genre', 'Fantasy')
       ->update([
           'category_id' => 6
        ]);
        Product::where('genre', 'Sports')
       ->update([
           'category_id' => 5
        ]);
        Product::where('genre', 'MOBA')
       ->update([
           'category_id' => 4
        ]);
         Product::where('genre', 'Action RPG')
       ->update([
           'category_id' => 16
        ]);
         Product::where('genre', 'ARPG')
       ->update([
           'category_id' => 16
        ]);
        Product::where('genre', 'Fighting')
       ->update([
           'category_id' => 17
        ]);
    }
}
