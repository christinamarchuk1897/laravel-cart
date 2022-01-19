<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }
    public function index()
    {
        $data = $this->settings->getAll();
        return view('product.create', ['data' => $data, 'route' => $this->settings::ROUTE]);
    }


}
