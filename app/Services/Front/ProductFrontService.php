<?php

namespace App\Services\Front;

use App\Contracts\ProductRepository;

class ProductFrontService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductBySlug($slug)
    {
        return $this->productRepository->getProductBySlug($slug);
    }
}