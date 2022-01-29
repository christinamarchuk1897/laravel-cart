<?php

namespace App\Services;

use App\Repositories\SettingsRepository;


class SettingsService extends BaseService
{
    public $repo;

    /**
     * Create a new service instance.
     *
     * @return void
     */
    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->repo = $settingsRepository;
    }
}
