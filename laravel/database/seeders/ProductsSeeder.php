<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Services\ProductService;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    private $productService;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function run()
    {
        Product::truncate();
        $data = $this->productService->getDataFromCloud();
        foreach ($data as $field) {
            Product::create([
                "title" => $field['title'],
                "image"=> $field['thumbnail'],
                "description" => $field['short_description'],
                "genre" => $field['genre'],
                "category_id" => 0,
                "platform" => $field['platform'],
                "publisher" => $field['publisher'],
                "developer" => $field['developer'],
                "release_date" => $field['release_date'],
            ]);
        }
    }
}
