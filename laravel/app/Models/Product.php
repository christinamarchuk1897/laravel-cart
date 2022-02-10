<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "image",
        "description",
        "genre",
        "category_id",
        "platform",
        "publisher" ,
        "developer",
        "release_date",
    ];

    public function getModelClass()
    {
        return Product::class;
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'product_id',  'id');
    }
}
