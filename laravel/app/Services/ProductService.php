<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Http;
use App\Repositories\CartRepository;
use Illuminate\Support\Facades\DB;


class ProductService extends BaseService
{
    public $repo;
    private $data;
    private $cartRepository;

    /**
     * Create a new service instance.
     *
     * @return void
     */
    public function __construct(ProductRepository $productRepository, CartRepository $cartRepository)
    {
        $this->repo = $productRepository;
        $this->cartRepository = $cartRepository;
    }


    public function getDataFromCloud()
    {
        $this->data = Http::get('https://www.freetogame.com/api/games')->collect();
        return $this->data;
    }

    public function getByCategoryId($id)
    {
        return $this->repo->getByCategoryId($id);
    }
}
