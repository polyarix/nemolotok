<?php

namespace App\Services;

use App\Contracts\CategoryRepository;
use App\Traits\Validator;

class CategoryService
{
    use Validator;
    protected $categoryRepository;
    protected $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:categories',
        'slug' => 'unique:slugs,NULL,slug,morph_type'
    ];

    protected function rules($id = false)
    {
        if($id){
            $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
        }
        return $this->validation_rules;
    }

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->all();
    }

    public function createCategory($data)
    {
        if($errors = $this->hasErrors($data)) return $errors;
        return $this->categoryRepository->create($data);
    }

    public function getCategoryById($id)
    {
        return $this->categoryRepository->get($id);
    }

    public function updateCategory($id, $data)
    {
        if($errors = $this->hasErrors($data)) return $errors;
        return $this->categoryRepository->update($id, $data);
    }

    public function deleteCategory($id)
    {
        return $this->categoryRepository->delete($id);
    }



}