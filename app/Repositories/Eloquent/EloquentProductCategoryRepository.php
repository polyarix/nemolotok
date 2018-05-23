<?php

namespace App\Repositories\Eloquent;

use App\Contracts\ProductCategoryRepository;
use App\Models\ProductCategory;

class EloquentProductCategoryRepository implements ProductCategoryRepository
{
    public function all()
    {
        return ProductCategory::all();
    }

    public function create($data)
    {
        $category = ProductCategory::create();
        $category->description()->create($data->only(['title', 'description', 'meta_title', 'meta_description']));
        return $category;
    }

    public function update($id, $data)
    {

    }

    public function delete($id)
    {

    }

    public function get($id)
    {

    }
}