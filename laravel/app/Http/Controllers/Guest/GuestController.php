<?php

namespace App\Http\Controllers\Guest;

use App\Services\ProductService;

class GuestController extends Controller
{
    private $productService;


    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }


    public function index()
    {
        $products = $this->productService->paginated();

        return view('home', ['products' => $products]);
    }
}
