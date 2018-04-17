<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class CategoryController extends Controller
{
    public function index()
    {
        if(\Gate::allows('index-api-category')){
            return Category::all();
        } else {
            return Response::json(['message'=>'у Вас недостаточно прав'], 403);
        }

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


    /**
     * @param $id
     * @return int
     * @throws \Exception
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return 204;
    }
}
