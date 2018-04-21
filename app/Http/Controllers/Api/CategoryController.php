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
     *     path="/api/categories",
     *     description="Returns categories",
     *     operationId="api.category.index",
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

    /**
     * Display a listing of the store method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *     path="/api/categories",
     *     description="Creating categories",
     *     operationId="api.category.store",
     *     produces={"application/json"},
     *     tags={"CategoryController"},
     *     @SWG\Parameter(
     *          name="api_token",
     *          in="query",
     *          description="api token",
     *          required=true,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="name",
     *          in="query",
     *          description="Category name",
     *          required=false,
     *          type="string"
     *     ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function store(Request $request)
    {
        return Category::create($request->only(['name']));
    }
    /**
     * Display a listing of the show method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/categories/{categoryId}",
     *     description="Show category",
     *     operationId="api.category.show",
     *     produces={"application/json"},
     *     tags={"CategoryController"},
     *     @SWG\Parameter(
     *          name="api_token",
     *          in="query",
     *          description="api token",
     *          required=true,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="categoryId",
     *          in="path",
     *          description="id",
     *          required=true,
     *          type="integer"
     *     ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function show($id)
    {
        return Category::findOrFail($id);
    }

    /**
     * Display a listing of the update method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Put(
     *     path="/api/news/{categoryId}",
     *     description="Editing category",
     *     operationId="api.category.update",
     *     produces={"application/json"},
     *     tags={"CategoryController"},
     *     @SWG\Parameter(
     *          name="api_token",
     *          in="query",
     *          description="api token",
     *          required=true,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="categoryId",
     *          in="path",
     *          description="id",
     *          required=true,
     *          type="integer"
     *     ),
     *     @SWG\Parameter(
     *          name="name",
     *          in="query",
     *          description="category name",
     *          required=false,
     *          type="string"
     *     ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->only(['name']));

        return $category;
    }

    /**
     *  Display a listing of the destroy method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Delete(
     *     path="/api/news/{categoryId}",
     *     description="Deleting category",
     *     operationId="api.category.destroy",
     *     produces={"application/json"},
     *     tags={"CategoryController"},
     *     @SWG\Parameter(
     *          name="api_token",
     *          in="query",
     *          description="api token",
     *          required=true,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="categoryId",
     *          in="path",
     *          description="id",
     *          required=true,
     *          type="integer"
     *     ),
     *   @SWG\Response(response=204, description="successful delet operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function destroy($id)
    {
        NewsCategory::where('category_id', $id)->delete();
        $category = Category::findOrFail($id);
        $category->delete();
        return 204;
    }
}
