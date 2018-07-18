<?php

namespace App\Services;

use App\Contracts\FilesRepository;
use App\Contracts\ProductCategoryRepository;
use App\Contracts\SettingsRepository;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Slug;
use App\Traits\Validator;
use Illuminate\Support\Facades\Input;

class ProductCategoryService
{
    use Validator;

    protected $productCategoryRepository, $settingsRepository, $filesRepository;
    protected $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:product_categories_descriptions',
        'slug' => 'min:3|unique:slugs,slug,id,morph_id,morph_type,App\Models\ProductCategory',
        'image.*' => 'max:5000|file|mimes:jpeg,png'
    ];
    private $class_name = ProductCategory::class;
    protected function rules($id = false)
    {
        if($id){
            $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
            $slug = Slug::where('morph_id', $id)->where('morph_type',$this->class_name)->firstOrFail();
            if(Input::get('slug') === $slug->slug){
                $this->validation_rules['slug'] = 'min:3';
            }
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
        if($errors = $this->hasErrors($data)) return $errors;
        if($data->has('image')) {
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
        if($errors = $this->hasErrors($data, $id)) return $errors;
        if($data->has('image')){
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