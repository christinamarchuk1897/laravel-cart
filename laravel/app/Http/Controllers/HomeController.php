<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Services\ProductService;

class HomeController extends Controller
{
    private $productService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductService $productService)
    {
        $this->middleware('auth');
        $this->productService = $productService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->productService->all();
        $inCart = $this->productService->getCartProduct();
       // dd($inCart);
        return view('home', ['products' => $data, 'inCart' => $inCart]);
    }
}
