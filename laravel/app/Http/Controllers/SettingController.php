<?php

namespace App\Http\Controllers;

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
        // dd($data)
        return view('settings.index', ['data' => $data, 'route' => $this->settings::ROUTE]);
    }
}
