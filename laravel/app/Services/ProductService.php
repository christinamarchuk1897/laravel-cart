<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Http;


class ProductService extends BaseService
{
    public $repo;
    private $data;

    /**
     * Create a new service instance.
     *
     * @return void
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->repo = $productRepository;
    }


    public function getDataFromCloud()
    {
        $this->data = Http::get('https://www.freetogame.com/api/games')->collect();
        return $this->data;
    }

}
