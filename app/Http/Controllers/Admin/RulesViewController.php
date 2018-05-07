<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ApiRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RulesViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rules.index', [
            'rules' => json_decode((ApiRequest::request('GET', route('api.rules.index')))->getBody())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rules.create', [
            'permissions' => json_decode((ApiRequest::request('GET', route('api.permissions.index')))->getBody())
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
        $data = ApiRequest::request('POST', route('api.rules.store'), $request);

        return $this->response('admin.rules.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.rules.show', [
            'rule' => json_decode((ApiRequest::request('GET', route('api.rules.show', $id)))->getBody())
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
        return view('admin.rules.edit', [
            'rule' => json_decode((ApiRequest::request('GET', route('api.rules.show', $id)))->getBody()),
            'permissions' => json_decode((ApiRequest::request('GET', route('api.permissions.index')))->getBody())
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ApiRequest::request('PUT', route('api.rules.update', $id), $request);
        return $this->response('admin.rules.index', $data, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ApiRequest::request('DELETE', route('api.rules.destroy', $id));
        return json_encode($data->getStatusCode());
    }
}
