<?php

namespace App\Services;

use App\Contracts\ProductCategoryRepository;
use App\Traits\Validator;

class ProductCategoryService
{
    use Validator;

    protected $productCategoryRepository;
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

    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function getAllCategories()
    {
        return $this->productCategoryRepository->all();
    }

    public function createCategory($data)
    {
        return $this->productCategoryRepository->create($data);
    }

    public function getCategoryById($id)
    {
        return $this->productCategoryRepository->get($id);
    }

    public function updateCategory($id, $data)
    {
        return $this->productCategoryRepository->update($id, $data);
    }

    public function deleteCategory($id)
    {
        return $this->productCategoryRepository->delete($id);
    }
}