<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //

    private $categories;

    public function __construct(Category $categories)
    {
        $this->categories = $categories;
    }

    public function index()
    {
        $data = $this->categories->getAll();
        return view('catalog.index', ['data' => $data, 'route' => $this->categories::ROUTE_CATALOG_SHOW]);
    }

    public function show($id)
    {
        $data = $this->categories->getAll();
        return view('catalog.index', ['data' => $data, 'route' => $this->categories::ROUTE_CATALOG_SHOW]);
    }

}
