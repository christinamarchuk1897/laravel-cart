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

    // public function getModelClass()
    // {
    //     return Product::class;
    // }

    // public function getAllProducts()
    // {
    //    return Product::get();
    // }

    // public function getProduct($id)
    // {
    //     return  Product::where('id', $id)->get();
    // }

    // public function createProduct($data)
    // {
    //     return Product::create($data);
    // }

    // public function getProductByCategory($categoryId)
    // {
    //     return Product::where('category_id', $categoryId)->get();
    // }
}
