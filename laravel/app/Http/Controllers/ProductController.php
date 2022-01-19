<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductCreateRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $product;
    private $allCategories;

    public function __construct(Product $product, Category $allCategories)
    {
        $this->product = $product;
        $this->allCategories = $allCategories;
    }

    public function show($id)
    {
        $data = $this->product->getProduct($id);
        return view('product.details', ['product' => $data[0]]);
    }

    public function index()
    {
        $categories = $this->allCategories->getAll();
        return view('product.create', ['categories' => $categories]);
    }

    public function create(ProductCreateRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('image_path'))
        {
            $request->file('image_path')->storeAs('public/images', $request->file('image_path')->getClientOriginalExtension());
            $data['image_path'] = $request->file('image_path')->getClientOriginalName();
        }
        $this->product->createProduct($data);
        return redirect()->route('dashboard');
    }
}
