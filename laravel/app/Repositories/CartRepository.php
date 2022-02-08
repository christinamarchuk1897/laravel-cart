<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Cart;

class CartRepository extends BaseRepository
{
    protected $model;

    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(Cart $cart)
    {
        $this->model = $cart;
    }

    public function find($id)
    {
        return $this->model->where('product_id', $id)->first();
    }

    public function findProductInCart($id)
    {
        return $this->model->where('product_id',$id)->get()->count();
    }
}
