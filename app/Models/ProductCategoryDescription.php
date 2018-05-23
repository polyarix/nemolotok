<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryDescription extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $table = 'product_categories_descriptions';
}
