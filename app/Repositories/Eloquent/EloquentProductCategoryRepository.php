<?php

namespace App\Repositories\Eloquent;

use App\Contracts\ProductCategoryRepository;
use App\Models\ProductCategory;
use App\Repositories\BaseRepository;

class EloquentProductCategoryRepository extends BaseRepository implements ProductCategoryRepository
{
    public function __construct(ProductCategory $model)
    {
        $this->setModel($model);
    }

    public function all()
    {
        return $this->model->with('description')->get();
    }

    public function create($data)
    {
        $category = $this->model->create($data->only(['enabled', 'is_in_catalog']));
        $category->description()->create($data->only(['name', 'description', 'meta_title', 'meta_description', 'meta_keyword']));

        if($data->has('categories')) {
            $category->parent()->associate($data->only('categories')['categories'][0]);
        }

        if($data->images){
            foreach($data->images as $original => $image){
                $category->files()->create(['url' => $original])
                    ->images()
                    ->createMany($image);
            }
        }
        $category->slug()->create(['slug' => $data->get('slug')]);
        $category->save();
        return $category;
    }

    public function update($id, $data)
    {
        $category = $this->model->with('description')->findOrFail($id);
        $category->enabled = $data->get('enabled');
        $category->is_in_catalog = $data->get('is_in_catalog');
        $category->description()->update($data->only(['name', 'description', 'meta_title', 'meta_description', 'meta_keyword']));
        if($data->has('categories')){
            $category->parent()->associate($data->only('categories')['categories'][0]);
        }

        if($data->images){
            foreach($data->images as $original => $image){
                $category->files()->create(['url' => $original])
                    ->images()
                    ->createMany($image);
            }
        }

        $category->slug()->update(['slug' => $data->get('slug')]);

        $category->save();
        return $category;
    }

    public function delete($id)
    {
        $category = $this->model->findOrFail($id);
        $category->delete();
        return true;
    }

    public function get($id)
    {
        return $this->model->with('description', 'parent', 'files', 'slug')->findOrFail($id);
    }

    public function removeFile($category_id, $file_id)
    {
        $category = $this->get($category_id);
        return $category->files->find($file_id)->delete();
    }

    public function getBySlug($slug)
    {
        return ProductCategory::whereHas('slug', function($query) use ($slug){
            $query->where('slug', $slug);
        })->with('description', 'files.images', 'slug')->firstOrFail();
    }

}