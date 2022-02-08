<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CartService;

class CartController extends Controller
{
    private $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }


    public function index()
    {
        $products = $this->cartService->getCartProduct();
        return view('cart.cart', ['products' => $products]);
    }

    public function add(Request $request)
    {
        $this->cartService->create([
            'session_id' => session()->getId(),
            'user_id' => auth()->user()->id,
            'product_id' => $request->id
        ]);
        return response()->json([$request->all()]);
    }

    public function delete(Request $request)
    {
        if ($request->id !== null) {
            $this->cartService->destroy($request->id);
            return back();
        }

    }

}
