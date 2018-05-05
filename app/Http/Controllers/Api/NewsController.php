<?php
namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    /**
     * Display a listing of the index method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/news",
     *     description="Getting all articles",
     *     operationId="api.news.index",
     *     produces={"application/json"},
     *     tags={"NewsController"},
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
    public function index(Request $request)
    {
        $news = News::filter($request);
        return json_encode($news);
    }

    /**
     * Display a listing of the store method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *     path="/api/news",
     *     description="Creating article",
     *     operationId="api.news.store",
     *     produces={"application/json"},
     *     tags={"NewsController"},
     *     @SWG\Parameter(
     *          name="token",
     *          in="query",
     *          description="token",
     *          required=true,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="title",
     *          in="formData",
     *          description="title",
     *          required=false,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="content",
     *          in="formData",
     *          description="content",
     *          required=false,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="categories",
     *          in="formData",
     *          description="categories",
     *          required=false,
     *          type="array",
     *          @SWG\Items(
     *             type="integer"
     *         )
     *     ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function store(Request $request)
    {
        if($article = News::create(['title' => $request->get('title'),'content' => $request->get('content')])) {

            if(is_string($request->get('categories'))){
                $categories = explode(',', $request->get('categories'));
            } else {
                $categories = $request->get('categories');
            }

            $article->categories()->attach($categories);
        }

        return $article;
    }

    /**
     * Display a listing of the show method
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     *
     * @SWG\Get(
     *     path="/api/news/{articleId}",
     *     description="Get one article",
     *     operationId="api.news.show",
     *     produces={"application/json"},
     *     tags={"NewsController"},
     *     @SWG\Parameter(
     *          name="token",
     *          in="query",
     *          description="token",
     *          required=true,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="articleId",
     *          in="path",
     *          description="id",
     *          required=true,
     *          type="integer"
     *     ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=404, description="Article not found"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function show($id)
    {
        return News::with('categories')->findOrFail($id);
    }

    /**
     * Display a listing of the update method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Put(
     *     path="/api/news/{articleId}",
     *     description="Editing article",
     *     operationId="api.news.update",
     *     produces={"application/json"},
     *     tags={"NewsController"},
     *     @SWG\Parameter(
     *          name="token",
     *          in="query",
     *          description="token",
     *          required=true,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="articleId",
     *          in="path",
     *          description="id",
     *          required=true,
     *          type="integer"
     *     ),
     *     @SWG\Parameter(
     *          name="title",
     *          in="query",
     *          description="title",
     *          required=false,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="content",
     *          in="query",
     *          description="content",
     *          required=false,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="categories",
     *          in="formData",
     *          description="categories",
     *          required=false,
     *          type="array",
     *          @SWG\Items(
     *             type="integer"
     *         )
     *     ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function update(Request $request, $id)
    {
        $article = News::findOrFail($id);
        $article->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);

        if(is_string($request->get('categories'))){
            $categories = explode(',', $request->get('categories'));
        } else {
            $categories = $request->get('categories');
        }

        $article->categories()->sync($categories);

        return $article;
    }
    /**
     *  Display a listing of the destroy method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Delete(
     *     path="/api/news/{articleId}",
     *     description="Deleting article",
     *     operationId="api.news.update",
     *     produces={"application/json"},
     *     tags={"NewsController"},
     *     @SWG\Parameter(
     *          name="token",
     *          in="query",
     *          description="token",
     *          required=true,
     *          type="string"
     *     ),
     *     @SWG\Parameter(
     *          name="articleId",
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
        $article = News::findOrFail($id);
        $article->delete();
        return 204;
    }
}
