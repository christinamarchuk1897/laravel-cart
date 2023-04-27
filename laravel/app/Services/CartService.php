<?php

namespace App\Services;


class CartService
{
    public function getProducts()
    {
        $sessionItems = session()->get('cart');
        return $sessionItems;
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
                )
        ]);
        session()->put(['cart' => \Cart::getContent()]);
        return session()->flash('success', 'Product is Added to Cart Successfully !');
    }

    public function updateCart($request)
    {
        $products = session()->get('cart');
        if (\Cart::getContent()->isEmpty() && $products) {
            foreach ($products as $product) {
                \Cart::add(
                    [
                        'id' => $product['id'],
                        'product_id' => $product['id'],
                        'name' => $product['name'],
                        'price' => $product['price'],
                        'quantity' => $product['quantity'],
                        'attributes' => array(
                            'image' => $product->attributes['image'],
                            )
                    ]
                );
            }
        }
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        session()->put(['cart' => \Cart::getContent()]);
        session()->flash('success', 'Item Cart is Updated Successfully !');
        return redirect()->route('shoppingCart');
    }

    public function removeCart($request)
    {
        \Cart::remove($request->id);
        session()->put(['cart' => \Cart::getContent()]);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('shoppingCart');
    }

    public function clearAllCart($request)
    {
        if ($request->id) {
            \Cart::clear();
            session()->put(['cart' => \Cart::getContent()]);
            session()->flash('success', 'All Item Cart Clear Successfully !');
        }
    }
}
