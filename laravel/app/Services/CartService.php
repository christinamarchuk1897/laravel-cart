<?php

namespace App\Services;

use App\Repositories\CartRepository;

class CartService extends BaseService
{
    public $repo;

    public function __construct(CartRepository $cartRepository)
    {
        $this->repo = $cartRepository;
    }

    public function getCartProduct()
    {
        $cartData = $this->repo->all();
        foreach ($cartData as $data)
        {
            $product[] = $data->product()->get()->first();
        }

        return $product;
    }

    public function findProductInCart($id)
    {
        return $this->repo->findProductInCart($id);
    }
}
