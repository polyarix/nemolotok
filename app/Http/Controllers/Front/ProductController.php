<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Services\Front\ProductFrontService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    protected $service;

    public function __construct(ProductFrontService $productFrontService)
    {
        $this->service = $productFrontService;
    }

    public function index(String $parent_category_slug=null, String $category_slug=null, String $product_slug=null)
    {
        $product = $this->service->getProductBySlug($product_slug);
        return view('front.product.index', [
            'product' => $product
        ]);
    }
}
