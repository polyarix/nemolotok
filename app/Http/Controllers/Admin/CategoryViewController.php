<?php

namespace App\Http\Controllers\Admin;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryViewController extends Controller
{
    public function index()
    {

        $client = new Client();
//        $data = $client->request('POST', route('api.register'), [
//         RequestOptions::JSON => '{"name": "John", "email": "john.doe@toptal.com", "password": "toptal123", "password_confirmation": "toptal123"}'
//        ]);
//        dd($data->getStatusCode());
        $data = $client->request('GET', route('api.category.index'));
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
        $client = new Client();
        $client->request('POST', route('api.category.store'), [RequestOptions::JSON => $request->only(['name'])]);
        return redirect()->route('admin.category.view.index');
    }

    public function show($id)
    {
        $client = new Client();
        $data = $client->request('GET', route('api.category.show', ['id' => $id]));
        return view('admin.category.show', [
            'category' => json_decode($data->getBody())
        ]);
    }

    public function edit($id)
    {
        $client = new Client();
        $data = $client->request('GET', route('api.category.show', ['id' => $id]));
        return view('admin.category.edit', [
            'category' => json_decode($data->getBody())
        ]);
    }

    public function update(Request $request, $id)
    {
        $client = new Client();
        $client->request('PUT', route('api.category.update', $id), [
            RequestOptions::JSON => $request->all()
        ]);
        return redirect()->route('admin.category.view.index');
    }
}
