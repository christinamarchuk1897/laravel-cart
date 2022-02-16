<?php

namespace App\Services;


class CartService
{
    public function getProducts()
    {
        return \Cart::getContent();
    }

    public function addToCart($request)
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

        return session()->flash('success', 'Product is Added to Cart Successfully !');
    }

    public function updateCart($request)
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

        return redirect()->route('shoppingCart');
    }

    public function removeCart($request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('shoppingCart');
    }

    public function clearAllCart($request)
    {
        if ($request->id) {
            \Cart::clear();
            session()->flash('success', 'All Item Cart Clear Successfully !');
        }
    }
}
