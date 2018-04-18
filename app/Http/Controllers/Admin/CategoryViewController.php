<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ApiRequest;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryViewController extends Controller
{
    public function index()
    {
//        $route_collection = \Route::getRoutes();

//        foreach($route_collection as $item)
//        {
//            if(preg_match('~(admin|api)~', $item->getPrefix())) {
//                echo $item->getName() . '  =====  '.$item->uri() . '  =====  '. $item->getActionName() .'<br />';
//            }
//
//        }
//        die();
//        dd(CategoryController::class . '@index');
//        dd(\Route::getRoutes('admin.category.view.index'));
//        dd(route('admin.category.view.index'));
        $data = ApiRequest::request('GET', route('api.category.index'));

        return view('admin.category.index', [
            'categories' => json_decode($data->getBody())
        ]);
    }


    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        ApiRequest::request('POST', route('api.category.store'), $request);

        return redirect()->route('admin.category.view.index');
    }

    public function show($id)
    {
        $data = ApiRequest::request('GET', route('api.category.show', ['id' => $id]));

        return view('admin.category.show', [
            'category' => json_decode($data->getBody())
        ]);
    }

    public function edit($id)
    {
        $data = ApiRequest::request('GET', route('api.category.show', ['id' => $id]));

        return view('admin.category.edit', [
            'category' => json_decode($data->getBody())
        ]);
    }

    public function update(Request $request, $id)
    {
        ApiRequest::request('PUT', route('api.category.update', $id), $request);
        return redirect()->route('admin.category.view.index');
    }

    public function destroy($id)
    {
        $data = ApiRequest::request('DELETE', route('api.category.destroy', ['id' => $id]));

        return json_encode($data->getStatusCode());
    }
}
