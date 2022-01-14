<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // // private ProductRepository $productRepository;


    // public function __construct(ProductRepository $productRepository)
    // {
    //     $this->productRepository = $productRepository;
    // }

    public function show()
    {
        // dd(ProductRepository::class);
        return view('home');
    }
}
