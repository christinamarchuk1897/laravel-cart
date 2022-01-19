<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'code',
        'price',
        'category_id',
        'image_path'
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

    public function createProduct($data)
    {
        return Product::create($data);
    }
}
