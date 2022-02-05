<?php

namespace App\Services;

use App\Repositories\GenreRepository;

class GenreService extends BaseService
{
    public $repo;

    public function __construct(GenreRepository $genreRepository)
    {
        $this->repo = $genreRepository;
    }
}
