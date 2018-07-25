<?php

namespace App\Services\Front;

use App\Contracts\ProductCategoryRepository;

class HomePageService
{
    protected $productCategoryRepository;

    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }
}