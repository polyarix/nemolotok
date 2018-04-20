<?php
namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the index method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/category",
     *     description="Returns news.",
     *     operationId="api.news.index",
     *     produces={"application/json"},
     *     tags={"CategoryController"},
     *     @SWG\Parameter(
     *     name="api_token",
     *     in="query",
     *     description="api token",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
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
