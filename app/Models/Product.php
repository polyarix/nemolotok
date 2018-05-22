<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function description()
    {
        return $this->belongsToMany(ProductDescription::class, 'products_to_descriptions', 'product_id');
    }
}
