<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->middleware('auth');
        $this->productRepository = $productRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->productRepository->getAllProducts();
        // dd($data);

        return view('home', ['products' => $data]);
    }

}
