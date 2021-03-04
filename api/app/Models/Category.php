<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
//        'id'
    ];

    protected $table = "categories";

//  To use string as foreign key
//    public $incrementing = false;
//    protected $keyType = 'string';

    public function products(){
        return $this->hasMany(Product::class);
    }

}
