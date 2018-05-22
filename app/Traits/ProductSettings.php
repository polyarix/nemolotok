<?php

namespace App\Traits;

use App\Services\ProductService;

trait ProductSettings
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
}