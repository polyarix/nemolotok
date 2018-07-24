<?php

namespace App\Services\Front;

use App\Contracts\ProductCategoryRepository;

class ProductCategoryFrontService
{
    protected $productCategoryRepository;

    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function getCategoryBySlug($slug)
    {
        return $this->productCategoryRepository->getBySlug($slug);
    }
}