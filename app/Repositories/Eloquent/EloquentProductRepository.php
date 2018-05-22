<?php

namespace App\Repositories\Eloquent;

use App\Contracts\ProductRepository;
use App\Models\Product;

class EloquentProductRepository implements ProductRepository
{
    public function all()
    {
        return Product::with('description')->get();
    }

    public function create($data)
    {

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