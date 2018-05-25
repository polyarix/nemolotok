<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $table = 'products_descriptions';
}
