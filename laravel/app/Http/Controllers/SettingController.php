<?php

namespace App\Http\Controllers;

use App\Services\SettingsService;

class SettingController extends Controller
{
    private $settingsService;
    private $model;

    public function __construct(SettingsService $settingsService)
    {
        $this->settingsService = $settingsService;
        $this->model = $settingsService->getModelClass();
    }
    public function index()
    {
        $data = $this->settingsService->all();
        return view('product.create', ['data' => $data, 'route' => $this->model::ROUTE]);
    }
}
