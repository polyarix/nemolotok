<?php

namespace App\Repositories\Eloquent;

use App\Contracts\ProductRepository;
use App\Models\Product;

class EloquentProductRepository implements ProductRepository
{
    public function all()
    {
        return Product::with('description', 'files.images')->get();
    }

    public function create($data)
    {
        $product = Product::create($data->only([
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
        ]));
        $product->description()->create($data->only([
            'name',
            'description',
            'meta_title',
            'meta_description',
            'meta_keyword'
        ]));

        $product->categories()->attach($data->get('categories'));
        $product->slug()->create(['slug' => $data->get('slug')]);

        if($data->images){
            foreach($data->images as $original => $image){
                $product->files()->create(['url' => $original])
                    ->images()
                    ->createMany($image);
            }
        }
        return $product;
    }

    public function update($id, $data)
    {
        $product = Product::with(['categories', 'description'])->findOrFail($id);
        $product->update($data->only([
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
        ]));
        $product->description()->update($data->only([
            'name',
            'description',
            'meta_title',
            'meta_description',
            'meta_keyword'
        ]));
        $product->categories()->sync($data->get('categories'));
        $product->slug()->update(['slug' => $data->get('slug')]);
        if($data->images){
            foreach($data->images as $original => $image){
                $product->files()->create(['url' => $original])
                    ->images()
                    ->createMany($image);
            }
        }

        return $product;
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return true;
    }

    public function get($id)
    {
        return Product::with(['description', 'categories', 'files.images'])->findOrFail($id);
    }

    public function removeFile($product_id, $file_id)
    {
        $product = $this->get($product_id);
        return $product->files->find($file_id)->delete();
    }
}