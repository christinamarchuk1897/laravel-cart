<?php

namespace App\Services;

use App\Repositories\CartRepository;

class CartService extends BaseService
{
    const TOTAL = 0;
    public $repo;

    public function __construct(CartRepository $cartRepository)
    {
        $this->repo = $cartRepository;
    }

    public function getCartProduct()
    {
        $cartData = $this->repo->all();
        $total = self::TOTAL;
        if ($cartData->count() > 0) {
            foreach ($cartData as $key => $item) {
                $products[] = $item->product()->get()->first();
                $total += $item->quantity * $products[$key]->price;
            }

            return ['products' => $products, 'total' =>$total];
        }
    }

    public function findProductInCart($id)
    {
        return $this->repo->findProductInCart($id);
    }

    public function changeQty($product)
    {
        return $this->repo->changeQty($product);
    }

    public function clear($key, $id)
    {
        return $this->repo->clear($key, $id);
    }
}
