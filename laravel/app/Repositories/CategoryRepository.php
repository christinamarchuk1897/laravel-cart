<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Category;
class CategoryRepository extends BaseRepository
{
    protected $model;

    /**
     * Create a new repository instance.
     *
     * @return void
     */
   public function __construct(Category $category)
   {
       $this->model = $category;
   }

   public function getProductByCategory($id)
   {
       return $this->model::find($id)->products()->paginate(15);
   }
}
