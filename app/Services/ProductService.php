<?php

namespace App\Services;

use App\Contracts\ProductCategoryRepository;
use App\Contracts\ProductRepository;
use App\Traits\Validator;

class ProductService
{
    use Validator;
    protected $productRepository, $productCategoryRepository;
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

    public function __construct(ProductRepository $productRepository, ProductCategoryRepository $productCategoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->all();
    }

    public function getAllCategories()
    {
        return $this->productCategoryRepository->all();
    }

    public function createProduct($data)
    {
        dd($data->allFiles());
        return $this->productRepository->create($data);
    }

    public function getProductById($id)
    {
        return $this->productRepository->get($id);
    }

    public function productUpdate($id, $data)
    {
        return $this->productRepository->update($id, $data);
    }

    public function productDelete($id)
    {
        return $this->productRepository->delete($id);
    }
}