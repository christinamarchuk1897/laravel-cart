<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Services\ProductService;
use App\Http\Requests\ProductCreateRequest;


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
    public function create(ProductCreateRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('image'))
        {
            $request->file('image')->move('images', $request->file('image')->getClientOriginalName());
            $data['image'] = $request->file('image')->getClientOriginalName();
        }
        $this->productService->create($data);
        return redirect()->route('dashboard');
    }
}
