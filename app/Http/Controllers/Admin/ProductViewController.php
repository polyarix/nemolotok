<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ProductSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductViewController extends Controller
{
    use ProductSettings;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index', [
            'products' => $this->productService->getAllProducts()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', [
            'categories' => $this->productService->getAllCategories(),
            'product' => [],
            'attributes' => \GuzzleHttp\json_encode($this->productService->getAttrubutes())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->productService->createProduct($request);

        return $this->response('admin.products.index', \GuzzleHttp\json_encode($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.products.show', [
            'product' => $this->productService->getProductById($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.products.edit', [
            'product' => $this->productService->getProductById($id),
            'categories' => $this->productService->getAllCategories()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->productService->productUpdate($id, $request);
        return $this->response('admin.products.index', \GuzzleHttp\json_encode($data));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return int
     */
    public function destroy($id)
    {
        if ($this->productService->productDelete($id)) return 200;
        return 404;
    }

    public function uploadImage(Request $request)
    {
        return \Response::json($request->all(), 200);
    }

    public function deleteImage(Request $request, $id)
    {
        $data = $this->productService->removeFile($id, $request->get('file_id'));
        return \Response::json($data,200);
    }

    public function attributes()
    {
        echo 'test';
//        return $this->productService->getAttributes();
    }
}
