<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const ROUTE_CATALOG = 'catalog';
    const ROUTE_CATALOG_SHOW = 'catalog.show';


    public function getModel()
    {
        return Category::class;
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function settings()
    {
        return $this->hasMany(Settings::class);
    }
}
