<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $products;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $products)
    {
        $this->middleware('auth');
        $this->products = $products;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->products->getAllProducts();


        return view('home', ['products' => $data]);
    }

}
