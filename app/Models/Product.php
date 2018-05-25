<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function description()
    {
        return $this->hasOne(ProductDescription::class,'product_id');
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_to_categories', 'product_id', 'category_id');
    }

    public function images()
    {
        return $this->morphMany(Video::class, 'morph');
    }
}
