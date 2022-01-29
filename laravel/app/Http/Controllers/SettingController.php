<?php

namespace App\Http\Controllers;

use App\Services\SettingsService;
use App\Services\CategoryService;
use App\Http\Requests\ProductCreateRequest;

class SettingController extends Controller
{
    private $settingsService;
    private $categoryService;
    private $model;

    public function __construct(SettingsService $settingsService, CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
        $this->settingsService = $settingsService;
        $this->model = $settingsService->getModelClass();
    }
    public function index()
    {
        $data = $this->settingsService->all();
        return view('product.create', ['data' => $data, 'route' => $this->model::ROUTE]);
    }

    public function show()
    {
        return view('product.create', ['categories' => $this->categoryService->all()]);
    }

    public function create(ProductCreateRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('image_path'))
        {
            $request->file('image_path')->storeAs('public/images', $request->file('image_path')->getClientOriginalExtension());
            $data['image_path'] = $request->file('image_path')->getClientOriginalName();
        }
        $this->settingsService->create($data);
        return redirect()->route('dashboard');
    }
}
