<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\ProductService;

class CatalogController extends Controller
{
    private $categoryService;
    private $productService;
    private $model;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
        $this->model = $categoryService->getModelClass();
    }

    public function index()
    {
        $categories = $this->categoryService->getActive();
        $products = $this->productService->all();
     //   dd($categories);
        return view('catalog.index', ['data' => $categories, 'route' => $this->model::ROUTE_CATALOG_SHOW, 'products' => $products]);
    }

    public function show($id)
    {
        $categories = $this->categoryService->getActive();
        $products = $this->categoryService->getProductByCategory($id);
        return view('catalog.index', ['data' => $categories, 'route' => $this->model::ROUTE_CATALOG_SHOW, 'products' => $products]);
    }

}
