<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'details',
        'name',
        'price',
        'stock',
        'description'

     /**
     * Get the user that owns the product.
     */
    ];
}

