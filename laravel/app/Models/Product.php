<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'has_avatar',
        'code',
        'price',
    ];

    public function getModelClass()
    {
        return Product::class;
    }

    public function getAllProducts()
    {
       return Product::get();
    }

    public function getProduct($id)
    {
        return  Product::where('id', $id)->get();
    }
}
