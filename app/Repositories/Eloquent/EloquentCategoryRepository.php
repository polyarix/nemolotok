<?php

namespace App\Repositories\Eloquent;

use App\Contracts\CategoryRepository;
use App\Models\Category;

class EloquentCategoryRepository implements CategoryRepository
{
    public function all()
    {
        return Category::all();
    }

    public function create($data){
        return Category::create($data->only(['name']));
    }

    public function update($id, $data)
    {
        $category = Category::findOrFail($id);
        $category->update($data->only(['name']));
        return $category;
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return true;
    }

    public function get($id)
    {
        return Category::findOrFail($id);
    }
}