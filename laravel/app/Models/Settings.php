<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    const ROUTE = 'product.create';

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

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
