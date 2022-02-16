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
        $items = $this->cartService->getCartProduct();
        $cartItems = $this->cartService->all();
        dd($cartItems, $items);
        return view('cart.cart', ['cartItems' => $cartItems, 'products' => $items['products'], 'total' => $items['total']]);
    }

    public function add(Request $request)
    {
        $this->cartService->create([
            'session_id' => session()->getId(),
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id
        ]);
        return response()->json([$request->all()]);
    }

    public function delete(Request $request)
    {
        \Cart::remove($request->id);
        if ($request->id !== null) {
            $this->cartService->destroy($request->id);
            session()->put(['cart' => \Cart::getContent()]);
            return back();
        }
    }

    public function changeQuantity(Request $request)
    {
        $this->cartService->changeQty(array_merge($request->all(), ['user_id' => auth()->user()->id]));
        return back();
    }

    public function clear(Request $request) {
        \Cart::clear();
        $this->cartService->clear('user_id', $request->user_id);
        return back();
    }

}
