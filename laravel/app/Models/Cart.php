<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $table = "cart";
    protected $fillable = [
        'session_id',
        'user_id',
        'product_id',
        'quantity'
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'id','product_id');
    }

}
