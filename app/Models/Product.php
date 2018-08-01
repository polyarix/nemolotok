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

    public function slug()
    {
        return $this->morphMany(Slug::class, 'morph');
    }

    public function cover()
    {
        return $this->files
            ->where('id', $this->cover_image)
            ->first()
            ->images
            ->where('tag', 'list')
            ->first();
    }

    public function discount() : String
    {
        $discount = '';
        if($this->discount || $this->discount > 0){
            $discount = ($this->price - $this->discount)/($this->price/100);
        }

        return number_format($discount, 0,'.', ' ')."%";
    }

    /**
     * @param ProductCategory $category
     * @return array = [
     *                  'parent' => parent category slug,
     *                  'category' => category slug,
     *                  'product' => product slug
     *                  ]
     */
    public function getSlug(ProductCategory $category) : array
    {
        $result = $category->getSlug();
        $result['product'] = $this->slug->first()->slug;
        return $result;
    }
}
