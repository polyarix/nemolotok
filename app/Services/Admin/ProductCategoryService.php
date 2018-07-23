<?php

namespace App\Services;

use App\Contracts\FilesRepository;
use App\Contracts\ProductCategoryRepository;
use App\Contracts\SettingsRepository;
use App\Traits\Validator;
use Illuminate\Validation\Rule;

class ProductCategoryService
{
    use Validator;

    protected $productCategoryRepository, $settingsRepository, $filesRepository;
    protected $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:product_categories_descriptions',
        'slug' => 'min:3|unique:slugs,slug,id,morph_id,morph_type,App\Models\ProductCategory',
        'image.*' => 'max:5000|file|mimes:jpeg,png'
    ];

    protected function rules($id = false)
    {
        if ($id) {
            $this->validation_rules['name'] = $this->validation_rules['name'] . ',id,' . $id;
            $this->validation_rules['slug'] = ['min:4', Rule::unique('slugs', 'slug')
                ->where('morph_type', $this->productCategoryRepository->getModel())
                ->whereNot('morph_id', $id)];
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
        if ($errors = $this->hasErrors($data)) return $errors;
        if ($data->has('image')) {
            $data->images = $this->filesRepository->createImage($data->allFiles()['image'], $this->settingsRepository->productCategoryImageSizes());
        }
        return $this->productCategoryRepository->create($data);
    }

    public function getCategoryById($id)
    {
        return $this->productCategoryRepository->get($id);
    }

    public function updateCategory($id, $data)
    {
        if ($errors = $this->hasErrors($data, $id)) return $errors;
        if ($data->has('image')) {
            $data->images = $this->filesRepository->createImage($data->allFiles()['image'], $this->settingsRepository->productCategoryImageSizes());
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