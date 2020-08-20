<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'users_id',
        'categories_id',
        'price',
        'description',
        'slug'
    ];

    protected $hidden = [

    ];
}
