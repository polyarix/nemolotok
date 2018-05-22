<?php
namespace App\Http\Controllers\Api;

use App\Traits\CategoriesSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    use CategoriesSetting;
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
     *     name="token",
     *     in="query",
     *     description="token",
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
        return $this->categoryService->getAllCategories();
    }

    /**
     * Display a listing of the store method
     *
     * @return array|bool
     *
     * @SWG\Post(
     *     path="/api/categories",
     *     description="Creating categories",
     *     operationId="api.category.store",
     *     produces={"application/json"},
     *     tags={"CategoryController"},
     *     @SWG\Parameter(
     *          name="token",
     *          in="query",
     *          description="token",
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
        return $this->categoryService->createCategory($request);
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
     *          name="token",
     *          in="query",
     *          description="token",
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
        return $this->categoryService->getCategoryById($id);
    }

    /**
     * Display a listing of the update method
     *
     * @return array|bool
     *
     * @SWG\Put(
     *     path="/api/news/{categoryId}",
     *     description="Editing category",
     *     operationId="api.category.update",
     *     produces={"application/json"},
     *     tags={"CategoryController"},
     *     @SWG\Parameter(
     *          name="token",
     *          in="query",
     *          description="token",
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
        return $this->categoryService->updateCategory($id, $request);
    }

    /**
     *  Display a listing of the destroy method
     *
     * @return int
     *
     * @SWG\Delete(
     *     path="/api/news/{categoryId}",
     *     description="Deleting category",
     *     operationId="api.category.destroy",
     *     produces={"application/json"},
     *     tags={"CategoryController"},
     *     @SWG\Parameter(
     *          name="token",
     *          in="query",
     *          description="token",
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
        $this->categoryService->deleteCategory($id);
        return 204;
    }
}
