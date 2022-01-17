<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    const ROUTE = 'settings.create';

    public function getAll()
    {
        return Settings::get();
    }
}
