<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
   protected $model;

    /**
     * Create a new repository instance.
     *
     * @return void
     */
   public function __construct(Product $product)
   {
       $this->model = $product;
   }
}
