<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded = ['id'];
    public function description()
    {
        return $this->hasOne(ProductCategoryDescription::class, 'category_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_to_categories', 'category_id');
    }
}
