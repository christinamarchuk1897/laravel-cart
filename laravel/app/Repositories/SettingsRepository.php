<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Settings;

class SettingsRepository extends BaseRepository
{
    protected $model;

    /**
     * Create a new repository instance.
     *
     * @return void
     */
   public function __construct(Settings $settings)
   {
       $this->model = $settings;
   }
}
