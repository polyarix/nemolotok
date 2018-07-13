<?php

namespace App\Services;

use App\Contracts\FilesRepository;
use App\Contracts\ProductCategoryRepository;
use App\Contracts\SettingsRepository;
use App\Traits\Validator;

class ProductCategoryService
{
    use Validator;

    protected $productCategoryRepository, $settingsRepository, $filesRepository;
    protected $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:product_categories'
    ];

    protected function rules($id = false)
    {
        if($id){
            $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
        }
        return $this->validation_rules;
    }

    public function __construct(
        ProductCategoryRepository $productCategoryRepository,
        SettingsRepository $settingsRepository,
        FilesRepository $filesRepository
    )
    {
        $this->productCategoryRepository = $productCategoryRepository;
        $this->settingsRepository = $settingsRepository;
        $this->filesRepository = $filesRepository;
    }

    public function getAllCategories()
    {
        return $this->productCategoryRepository->all();
    }

    public function createCategory($data)
    {
        if($data->has('image')) {
            $data->images = $this->filesRepository->createImage($data->allFiles()['image'], $this->settingsRepository->productImageSizes());
        }
        return $this->productCategoryRepository->create($data);
    }

    public function getCategoryById($id)
    {
        return $this->productCategoryRepository->get($id);
    }

    public function updateCategory($id, $data)
    {
        if($data->has('image')){
            $data->images = $this->filesRepository->createImage($data->allFiles()['image'], $this->settingsRepository->productImageSizes());
        }
        return $this->productCategoryRepository->update($id, $data);
    }

    public function deleteCategory($id)
    {
        return $this->productCategoryRepository->delete($id);
    }

    public function removeFile($category_id, $file_id)
    {
        return $this->productCategoryRepository->removeFile($category_id, $file_id);
    }
}