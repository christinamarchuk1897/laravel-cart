<?php

namespace App\Services;

use App\Repositories\PlatformRepository;

class PlatformService extends BaseService
{
    public $repo;

    public function __construct(PlatformRepository $platformRepository)
    {
        $this->repo = $platformRepository;
    }
}
