<?php
namespace App\Traits;

use App\Services\CategoryService;

trait CategoriesSetting
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
}