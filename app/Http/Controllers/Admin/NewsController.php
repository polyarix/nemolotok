<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'articles' => News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create', [
            'categories' => Category::all()
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
        if($article_id = News::create(['title' => $request->get('title'),'content' => $request->get('content')])->id) {
            $this->writeCategories($request, $article_id);
        }

        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.news.show', [
            'article' => News::where('id', $id)->get()->first(),
            'article_categories' => NewsCategory::where('article_id', $id)->get(),
            'categories' => Category::all()
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
        $article = News::where('id', $id)->get()->first();
        $article->categories = NewsCategory::where('article_id', $id)->get();
        return view('admin.news.edit', [
            'article' => $article,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        News::where('id', $id)->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);

        NewsCategory::where('article_id', $id)->delete();

        $this->writeCategories($request, $id);

        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('id', $id)->delete();
        NewsCategory::where('id',$id)->delete();
        if(!News::where('id', $id)->count()){
            return \GuzzleHttp\json_encode(true);
        }

        return \GuzzleHttp\json_encode(false);
    }

    protected function writeCategories($request, $article_id)
    {
        if(count($request->get('categories'))){
            foreach($request->get('categories') as $category) {
                NewsCategory::create([
                    'category_id' => $category,
                    'article_id' => $article_id
                ]);
            }
        }
    }
}
