<?php

namespace App\Repositories\Eloquent;

use App\Contracts\ProductRepository;
use App\Models\Product;
use App\Repositories\BaseRepository;

class EloquentProductRepository extends BaseRepository implements ProductRepository
{
    public function __construct(Product $model)
    {
        $this->setModel($model);
    }

    public function all()
    {
        return $this->model->with('description', 'files.images')->get();
    }

    public function create($data)
    {
        $product = $this->model->create($this->dataPreaparing($data));

        $product->description()->create($this->descriptionPreparing($data));
        $product->categories()->attach($data->get('categories'));
        $product->slug()->create(['slug' => $data->get('slug')]);

        if($data->images){
            foreach($data->images as $image){
                $files = $product->files()->create(['url' => $image['original']['url'], 'mime' => $image['original']['mime']])
                    ->images()
                    ->createMany($image['resized']);

                if($image['original']['old_name'] === $data->cover_image){
                    $product->cover_image = $files->first()->file_id;
                }

            }
        }
        $product->save();
        return $product;
    }

    public function update($id, $data)
    {
        $product = $this->model->with(['categories', 'description'])->findOrFail($id);

        $product->update($this->dataPreaparing($data));

        $product->description()->update($this->descriptionPreparing($data));
        $product->categories()->sync($data->get('categories'));
        $product->slug()->update(['slug' => $data->get('slug')]);

        if($data->images){
            foreach($data->images as $image){
                $files = $product->files()->create(['url' => $image['original']['url'], 'mime' => $image['original']['mime']])
                    ->images()
                    ->createMany($image['resized']);

                if($image['original']['old_name'] === $data->cover_image){
                    $product->cover_image = $files->first()->file_id;
                }
            }
        }

        $product->save();
        return $product;
    }

    public function delete($id)
    {
        $product = $this->model->findOrFail($id);
        $product->delete();
        return true;
    }

    public function get($id)
    {
        return $this->model->with(['description', 'categories', 'files.images'])->findOrFail($id);
    }

    public function removeFile($product_id, $file_id)
    {
        $product = $this->get($product_id);
        return $product->files->find($file_id)->delete();
    }

    private function dataPreaparing($data)
    {
        $result = $data->only([
            'sku',
            'enabled',
            'sorting',
            'price',
            'amount',
            'unit',
            'discount',
            'shippingprice',
            'preorder',
            'status'
        ]);

        if($data->has('cover_image') && preg_match('~^\d+$~', $data->cover_image)){
            $result['cover_image'] = $data->cover_image;
        }

        return $result;
    }

    private function descriptionPreparing($data)
    {
        return $data->only([
            'name',
            'description',
            'meta_title',
            'meta_description',
            'meta_keyword'
        ]);
    }

    public function getProductBySlug(String $slug)
    {
        return $this->model->whereHas('slug', function($query) use ($slug) {
            $query->where('slug', $slug);
        })->with('description', 'files.images')->firstOrFail();
    }
}