<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\CategoryService;
use App\Services\GenreService;
use App\Services\PlatformService;
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
    private $categoryService;
    private $genreService;
    private $platformService;

    public function __construct(ProductService $productService, CategoryService $categoryService, GenreService $genreService, PlatformService $platformService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
        $this->genreService = $genreService;
        $this->platformService = $platformService;
    }

    public function show($id)
    {
        $data = $this->productService->find($id);
        return view('product.details', ['product' => $data]);
    }

    public function showForm()
    {
        return view('product.create', ['categories' => $this->categoryService->all(), 'genres' => $this->genreService->all(), 'platforms' => $this->platformService->all()]);
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
