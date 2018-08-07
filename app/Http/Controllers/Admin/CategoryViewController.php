<?php

namespace App\Http\Controllers\Admin;

use App\Traits\CategoriesSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryViewController extends Controller
{
    use CategoriesSetting;
    public function index()
    {
        return view('admin.category.index', [
            'categories' => $this->categoryService->getAllCategories()
        ]);
    }


    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $data = $this->categoryService->createCategory($request);

        return $this->response('admin.category.view.index', \GuzzleHttp\json_encode($data));
    }

    public function show($id)
    {
        return view('admin.category.show', [
            'category' => $this->categoryService->getCategoryById($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.category.edit', [
            'category' => $this->categoryService->getCategoryById($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->categoryService->updateCategory($id, $request);
        return $this->response('admin.category.view.index', \GuzzleHttp\json_encode($data));
    }

    public function destroy($id)
    {

        if($this->categoryService->deleteCategory($id)){
            return 200;
        }
        return 404;

    }
}
