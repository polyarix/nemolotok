<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::filter($request);
        return $news;
    }

    public function store(Request $request)
    {
        if($article = News::create(['title' => $request->get('title'),'content' => $request->get('content')])) {
            $article->categories = $this->writeCategories($request, $article->id);
        }

        return $article;
    }

    public function show($id)
    {
        $article = News::findOrFail($id);
        if($article) {
            $category_list = [];
            $news_category_collection = NewsCategory::where('article_id', $article->id)->get();
            foreach($news_category_collection as $item)
            {
                $category_list[] = Category::where('id', $item->category_id)->firstOrFail();
            }
            $article->article_categories = $news_category_collection;
            $article->categories = $category_list;

            return $article;
        }

        return 500;
    }


    public function update(Request $request, $id)
    {
        $article = News::findOrFail($id);
        $article->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);

        NewsCategory::where('article_id', $id)->delete();

        $article->categories = $this->writeCategories($request, $article->id);

        return $article;
    }

    public function destroy($id)
    {
        $article = News::findOrFail($id);
        NewsCategory::where('id',$article->id)->delete();
        $article->delete();
        return 204;
    }

    protected function writeCategories($request, $article_id)
    {
        $categories_list = [];
        if(count($request->get('categories'))){
            foreach($request->get('categories') as $category) {
               NewsCategory::create([
                    'category_id' => $category,
                    'article_id' => $article_id
                ]);
               $categories_list[] = Category::where('id', $category)->firstOrFail();
            }
        }

        return $categories_list;
    }

    protected function getCategories($article_id)
    {

    }
}
