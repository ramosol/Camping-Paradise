<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'category_name',
        'title',
        'sub_title',
        'price',
        'description',
        'ref',
        'available',
        'timestamp',
        'created_at'
    ];

    protected $table = "products";

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
