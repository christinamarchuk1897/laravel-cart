<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Genre;

class GenreRepository extends BaseRepository
{
    protected $model;

    /**
     * Create a new repository instance.
     *
     * @return void
     */
   public function __construct(Genre $genre)
   {
       $this->model = $genre;
   }
}
