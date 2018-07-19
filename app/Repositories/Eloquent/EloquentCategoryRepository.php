<?php

namespace App\Repositories\Eloquent;

use App\Contracts\CategoryRepository;
use App\Models\Category;
use App\Repositories\BaseRepository;
use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Model;

class EloquentCategoryRepository extends BaseRepository implements CategoryRepository
{
    public function __construct(Category $model)
    {
        $this->setModel($model);
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