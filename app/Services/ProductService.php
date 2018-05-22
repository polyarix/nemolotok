<?php

namespace App\Services;

use App\Contracts\ProductRepository;
use App\Traits\Validator;

class ProductService
{
    use Validator;
    protected $productRepository;
    protected $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:categories'
    ];

    protected function rules($id = false)
    {
        if($id){
            $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
        }
        return $this->validation_rules;
    }

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->all();
    }

    public function createProduct($data)
    {
        return $this->productRepository->create($data);
    }
}