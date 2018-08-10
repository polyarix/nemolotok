<?php

namespace App\Services;

use App\Contracts\AttributeRepository;
use App\Contracts\FilesRepository;
use App\Contracts\ProductCategoryRepository;
use App\Contracts\ProductRepository;
use App\Contracts\SettingsRepository;
use App\Traits\Validator;
use Illuminate\Validation\Rule;

class ProductService
{
    use Validator;
    private $productRepository, $productCategoryRepository, $settingsRepository, $filesRepository, $attributesRepository;
    private $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:products_descriptions',
        'price' => 'required|numeric',
        'slug' => 'required|min:3|unique:slugs,slug,id,morph_id,morph_type,App\Models\Product',
        'image.*' => 'max:5000|file|mimes:jpeg,png'
    ];

    protected function rules($id = false)
    {
            if($id){
                $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
                $this->validation_rules['slug'] = ['required', 'min:3', Rule::unique('slugs', 'slug')
                    ->where('morph_type', $this->productRepository->getModel())
                    ->whereNot('morph_id', $id)];
            }
        return $this->validation_rules;
    }

    public function __construct(
        SettingsRepository $settingsRepository,
        ProductRepository $productRepository,
        ProductCategoryRepository $productCategoryRepository,
        FilesRepository $filesRepository,
        AttributeRepository $attributeRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->productCategoryRepository = $productCategoryRepository;
        $this->settingsRepository = $settingsRepository;
        $this->filesRepository = $filesRepository;
        $this->attributesRepository = $attributeRepository;
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
        if($data->has('image')) {
            $data->images = $this->filesRepository->createImage($data->allFiles()['image'], $this->settingsRepository->productImageSizes());
        }

        return $this->productRepository->create($data);
    }

    public function getProductById($id)
    {
        return $this->productRepository->get($id);
    }

    public function productUpdate($id, $data)
    {
        if($errors = $this->hasErrors($data,$id)) return $errors;

        if($data->has('image')){
            $data->images = $this->filesRepository->createImage($data->allFiles()['image'], $this->settingsRepository->productImageSizes());
        }

        return $this->productRepository->update($id, $data);
    }

    public function productDelete($id)
    {
        return $this->productRepository->delete($id);
    }

    public function removeFile($product_id, $file_id)
    {
        return $this->productRepository->removeFile($product_id, $file_id);
    }

    public function getAttrubutes()
    {
        return $this->attributesRepository->all();
    }
}