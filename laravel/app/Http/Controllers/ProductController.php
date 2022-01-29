<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Services\ProductService;


class ProductController extends Controller
{
    // index()
    // create()
    // store()
    // show()
    // edit()
    // update()
    // destroy()

    private $productService;
    private $allCategories;

    public function __construct(ProductService $productService, Category $allCategories)
    {
        $this->productService = $productService;
        $this->allCategories = $allCategories;
    }

    public function show($id)
    {
        $data = $this->productService->find($id);
        return view('product.details', ['product' => $data]);
    }
}
