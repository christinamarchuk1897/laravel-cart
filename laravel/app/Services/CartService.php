<?php

namespace App\Services;


class CartService
{
    public function getProducts()
    {
        $sessionItems = session()->get('cart');
        //$sessionItems->isEmpty() ? \Cart::getContent() : \Cart::add($sessionItems);
        if (!$sessionItems->isEmpty()) {
            foreach ($sessionItems as $item) {
            \Cart::add([
                'id' => $item->id,
                'product_id' => $item->id,
                'name' => $item->name,
                'price' =>$item->price,
                'quantity' => $item->quantity,
                'attributes' => array(
                'image' => $item->attributes['image'])
                ]);
            }
        }
        $products = \Cart::getContent();
        return $products;
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
