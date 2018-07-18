<?php

namespace App\Repositories\Eloquent;

use App\Contracts\CategoryRepository;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class EloquentCategoryRepository implements CategoryRepository
{
    private $model;

    public function __construct(Category $model)
    {
        $this->setModel($model);
    }

    public function setModel(Model $model)
    {
        $this->model = $model;
    }

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