<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\DB;

class CategoryService extends BaseService
{
    public $repo;
    private $productService;
    public function __construct(CategoryRepository $categoryRepository, ProductService $productService)
    {
        $this->repo = $categoryRepository;
        $this->productService = $productService;
    }

    public function getProductByCategory($id)
    {
        return $this->repo->getProductByCategory($id);
    }

    public function getActive()
    {
        $categories = $this->all()->sortBy('name');
        $products = DB::table('products')->pluck('category_id')->unique()->toArray();

        return $categories->filter(function($category) use ($products){
            return in_array($category->id, $products);
        });
    }
}
