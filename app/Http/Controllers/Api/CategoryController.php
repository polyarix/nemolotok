<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class CategoryController extends Controller
{
    public function index()
    {
       return Category::all();
    }


    public function store(Request $request)
    {
        return Category::create($request->only(['name']));
    }

    public function show($id)
    {
        return Category::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->only(['name']));

        return $category;
    }


    public function destroy($id)
    {
        NewsCategory::where('category_id', $id)->delete();
        $category = Category::findOrFail($id);
        $category->delete();
        return 204;
    }
}
