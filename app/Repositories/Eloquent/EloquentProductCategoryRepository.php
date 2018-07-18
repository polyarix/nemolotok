<?php

namespace App\Repositories\Eloquent;

use App\Contracts\ProductCategoryRepository;
use App\Models\ProductCategory;

class EloquentProductCategoryRepository implements ProductCategoryRepository
{
    public function all()
    {
        return ProductCategory::with('description')->get();
    }

    public function create($data)
    {
        $category = ProductCategory::create(['enabled' => $data->get('enabled')]);
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
        $category = ProductCategory::with('description')->findOrFail($id);
        $category->enabled = $data->get('enabled');
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
        $category = ProductCategory::findOrFail($id);
        $category->delete();
        return true;
    }

    public function get($id)
    {
        return ProductCategory::with('description', 'parent', 'files', 'slug')->findOrFail($id);
    }

    public function removeFile($category_id, $file_id)
    {
        $category = $this->get($category_id);
        return $category->files->find($file_id)->delete();
    }
}