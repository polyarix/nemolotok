<?php

namespace App\Repositories\Eloquent;

use App\Contracts\ProductRepository;
use App\Models\File;
use App\Models\Product;

class EloquentProductRepository implements ProductRepository
{
    public function all()
    {
        return Product::with('description')->get();
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
        if($data->images){
            foreach($data->images as $original => $image){
                $file = $product->files()->create(['url' => $original])
                    ->images()
                    ->create(['url' => $image[0]['url'], 'tag' => $image[0]['tag']]);
//                $file->images()->save(['url' => $image[0]['url'], 'tag' => $image[0]['tag']]);

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
        return Product::with(['description', 'categories'])->findOrFail($id);
    }
}