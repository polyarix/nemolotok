<?php

namespace App\Models;

use App\Traits\ModelDeleteFile;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ModelDeleteFile;
    protected $guarded = ['id'];

    public function description()
    {
        return $this->hasOne(ProductDescription::class,'product_id');
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_to_categories', 'product_id', 'category_id');
    }

    public function videos()
    {
        return $this->morphMany(Video::class, 'morph');
    }

    public function files()
    {
        return $this->morphMany(File::class, 'morph');
    }
}
