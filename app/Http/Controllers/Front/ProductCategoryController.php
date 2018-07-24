<?php

namespace App\Http\Controllers\Front;

use App\Models\ProductCategory;
use App\Services\Front\ProductCategoryFrontService;
use App\Traits\ProductCategorySettings;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    protected $service;

    public function __construct(ProductCategoryFrontService $productCategoryFrontService)
    {
        $this->service = $productCategoryFrontService;
    }

    public function categories()
    {

    }

    public function category($first=null, $second=null)
    {
        $slug = $first;

        if($second) $slug = $second;

        $category = $this->service->getCategoryBySlug($slug);

        dd($category);
    }
}
