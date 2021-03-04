<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_name',
        'product_id',
        'product_name',
        'price',
        'image',
        'available',
        'timestamp'
    ];
}
