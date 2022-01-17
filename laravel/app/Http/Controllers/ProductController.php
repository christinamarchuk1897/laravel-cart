<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index($id)
    {
        $data = $this->product->getProduct($id);

        return view('product.details', ['product' => $data[0]]);
    }

    public function create()
    {
        return view('settings.create');
    }
}
