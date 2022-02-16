<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Services\ProductService;
use App\Services\CartService;

class HomeController extends Controller
{
    private $productService;
    private $cartService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductService $productService, CartService $cartService)
    {
        $this->middleware('auth');
        $this->productService = $productService;
        $this->cartService = $cartService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->productService->paginated();
        $inCart = \Cart::getContent();
        return view('home', ['products' => $data, 'inCart' => $inCart]);
    }
}
