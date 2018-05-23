<?php

namespace App\Traits;

use App\Services\ProductCategoryService;

trait ProductCategorySettings
{
    protected $productCategoryService;

    public function __construct(ProductCategoryService $productCategoryService)
    {
        $this->productCategoryService = $productCategoryService;
    }
}