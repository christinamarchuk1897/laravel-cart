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

    public function find($id, $key = 'id')
    {
        return $this->model->where('product_id', $id)->first();
    }

    public function findProductInCart($id)
    {
        return $this->model->where('product_id',$id)->get()->count();
    }

    public function changeQty(array $product)
    {
        return $this->model->where('product_id', $product['product_id'])->where('user_id', $product['user_id'])->update([
            'quantity' => $product['quantity']
        ]);
    }

    public function clear($key, $id)
    {
        return $this->model->where($key, $id)->delete();
    }
    public function createItemFromSession($data){
        $this->model->firstOrCreate($data);
    }
}
