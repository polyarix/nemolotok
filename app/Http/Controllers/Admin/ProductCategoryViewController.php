<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ProductCategorySettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryViewController extends Controller
{
    use ProductCategorySettings;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product_category.index', [
            'categories' => $this->productCategoryService->getAllCategories()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product_category.create', [
            'category' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->productCategoryService->createCategory($request);
        return $this->response('admin.product-categories.index', \GuzzleHttp\json_encode($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.product_category.show', [
            'category' => $this->productCategoryService->getCategoryById($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.product_category.edit', [
            'category' => $this->productCategoryService->getCategoryById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->productCategoryService->updateCategory($id, $request);
        return $this->response('admin.product-categories.index', $data, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        if($this->productCategoryService->deleteCategory($id)){
            return 200;
        }
        return 404;
    }
}
