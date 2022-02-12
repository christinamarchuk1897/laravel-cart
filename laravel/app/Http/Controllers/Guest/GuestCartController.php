<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class GuestCartController extends Controller
{
    public function index()
    {
        return view('cart.cart');
    }
}
