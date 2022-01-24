<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //

    private $categories;
    private $productModel;

    public function __construct(Category $categories, Product $productModel)
    {
        $this->categories = $categories;
        $this->productModel = $productModel;
    }

    public function index()
    {
        $data = $this->categories->getAll();
        $products = $this->productModel->getAllProducts();
        return view('catalog.index', ['data' => $data, 'route' => $this->categories::ROUTE_CATALOG_SHOW, 'products' => $products]);
    }

    public function show($id)
    {
        $data = $this->categories->getAll();
        $products = $this->productModel->getProductByCategory($id);
        // dd($products);
        return view('catalog.index', ['data' => $data, 'route' => $this->categories::ROUTE_CATALOG_SHOW, 'products' => $products]);
    }

}
