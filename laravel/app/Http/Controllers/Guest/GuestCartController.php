<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class GuestCartController extends Controller
{
    public function index()
    {
        $products = \Cart::getContent();
        if(!session()->get('cart')->isEmpty()) {
            $products = $products->merge(session()->get('cart'))->unique();
        }

        return view('guest.guest-cart', ['products' => count($products) > 0 ? $products : null]);
    }

    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->product['id'],
            'product_id' => $request->product['id'],
            'name' => $request->product['title'],
            'price' => $request->product['price'],
            'quantity' => $request->product['quantity'],
            'attributes' => array(
                'image' => $request->product['image'],
                'session_id' => session()->getId()
            )
        ]);
        session()->put(['cart' => \Cart::getContent()]);
        return session()->flash('success', 'Product is Added to Cart Successfully !');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('guestShoppingCart');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('guestShoppingCart');
    }

    public function clearAllCart(Request $request)
    {
        if ($request->id) {
            \Cart::clear();
            session()->put(['cart'=> \Cart::getContent()]);
            session()->flash('success', 'All Item Cart Clear Successfully !');
        }

        return redirect()->route('guestShoppingCart');
    }
}
