<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Platform;

class PlatformRepository extends BaseRepository
{
    protected $model;

    /**
     * Create a new repository instance.
     *
     * @return void
     */
   public function __construct(Platform $platform)
   {
       $this->model = $platform;
   }
}
