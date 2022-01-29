<?php

namespace App\Http\Controllers;

use App\Services\SettingsService;
use App\Services\CategoryService;


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
}
