<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'description',
        'retail_price',
        'wholesale_price',
        'origin',
        'quantity',
        'product_image',
        'created_at',
        'updated_at',
    ];
}
