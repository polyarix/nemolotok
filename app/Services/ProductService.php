<?php

namespace App\Services;

use App\Contracts\FilesRepository;
use App\Contracts\ProductCategoryRepository;
use App\Contracts\ProductRepository;
use App\Contracts\SettingsRepository;
use App\Helpers\IResizer;
use App\Helpers\Uploader;
use App\Traits\Validator;

class ProductService
{
    use Validator;
    private $productRepository, $productCategoryRepository, $settingsRepository, $filesRepository;
    private $validation_rules = [
        'name' => 'required|min:3|max:50|string',
        'price' => 'required|numeric',
        'image.*' => 'max:5000|file|mimes:jpeg,png'
    ];

    protected function rules($id = false)
    {
        if($id) $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
        return $this->validation_rules;
    }

    public function __construct(
        SettingsRepository $settingsRepository,
        ProductRepository $productRepository,
        ProductCategoryRepository $productCategoryRepository,
        FilesRepository $filesRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->productCategoryRepository = $productCategoryRepository;
        $this->settingsRepository = $settingsRepository;
        $this->filesRepository = $filesRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->all();
    }

    public function getAllCategories()
    {
        return $this->productCategoryRepository->all();
    }

    /**
     * @param $data
     * @return array|bool
     */
    public function createProduct($data)
    {
        if($errors = $this->hasErrors($data)) return $errors;
        //Need to upload this to a files repository
        if($data->has('image')) {
            $files = $this->filesRepository->createImage($data->allFiles()['image'], $this->settingsRepository->productImageSizes());
            dd($files);
        }

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