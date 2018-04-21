<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ApiRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsViewController extends Controller
{

    public function index(Request $request)
    {
        $data = ApiRequest::request('GET', route('api.news.index'), $request);
        return view('admin.news.index', [
            'articles' => json_decode($data->getBody())
        ]);
    }

    public function create()
    {
        $data = ApiRequest::request('GET', route('api.category.index'));

        return view('admin.news.create', [
            'categories' => json_decode($data->getBody())
        ]);
    }


    public function store(Request $request)
    {
        ApiRequest::request('POST', route('api.news.index'), $request);
        return redirect()->route('admin.news.index');
    }

    public function show($id)
    {
        $data = ApiRequest::request('GET',route('api.news.show', $id));
        $article = json_decode($data->getBody());
        return view('admin.news.show', [
            'article' => $article,
            'article_categories' => $article->article_categories,
            'categories' => $article->categories
        ]);
    }

    public function edit($id)
    {
        $data = ApiRequest::request('GET',route('api.news.show', $id));
        $article = json_decode($data->getBody());

        return view('admin.news.edit', [
            'article' => $article,
            'categories' => $this->getCategories(),
        ]);
    }


    public function update($id, Request $request)
    {
        ApiRequest::request('PUT', route('api.news.update', ['id' => $id]), $request);
        return redirect()->route('admin.news.index');
    }

    public function destroy($id)
    {
        $data = ApiRequest::request('DELETE', route('api.news.destroy', $id));
        return json_encode($data->getStatusCode());
    }

    protected function getCategories()
    {
        $data = ApiRequest::request('GET',route('api.category.index'));
        return json_decode($data->getBody());
    }

}
