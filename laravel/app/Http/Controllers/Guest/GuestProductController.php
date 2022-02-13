<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Services\ProductService;
use Illuminate\Http\Request;

class GuestProductController extends ProductController
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function show($id)
    {
        $data = $this->productService->find($id);
        return view('product.details', ['product' => $data, 'inCart' => isset(\Cart::getContent()[$data->id]) ? true : false]);
    }
}
