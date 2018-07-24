<?php

namespace App\Models;

use App\Traits\ModelDeleteFile;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use ModelDeleteFile;
    protected $guarded = ['id'];
    public function description()
    {
        return $this->hasOne(ProductCategoryDescription::class, 'category_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_to_categories', 'category_id');
    }

    public function files()
    {
        return $this->morphMany(File::class, 'morph');
    }

    public function parent()
    {
        return $this->belongsTo(self::class);
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function slug()
    {
        return $this->morphMany(Slug::class, 'morph');
    }

    public function getSlug() : array
    {
        $result = [];
        if(count($this->parent)) {
            $result['parent'] = $this->parent->slug->first()->slug;
        }
        $result['category'] = $this->slug->first()->slug;

        return $result;
    }
}
