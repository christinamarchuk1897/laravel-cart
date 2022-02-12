<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class GuestCartController extends Controller
{
    public function index()
    {
        $products = \Cart::getContent();
        return view('guest.guest-cart', ['products' => $products]);
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
            )
        ]);


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

            session()->flash('success', 'All Item Cart Clear Successfully !');
        }

        return redirect()->route('guestShoppingCart');
    }
}
