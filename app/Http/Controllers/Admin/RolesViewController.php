<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ApiRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ApiRequest::request('GET', route('api.roles.index'));
        return view('admin.roles.index', [
            'roles' => json_decode($data->getBody())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create', [
            'rules' => json_decode((ApiRequest::request('GET', route('api.rules.index')))->getBody())
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
        $data = ApiRequest::request('POST', route('api.roles.store'), $request);
        return $this->response('admin.roles.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.roles.show', [
            'role' => json_decode((ApiRequest::request('GET', route('api.roles.show', $id)))->getBody())
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
        return view('admin.roles.edit', [
            'role' => json_decode((ApiRequest::request('GET', route('api.roles.show', $id)))->getBody()),
            'rules' => json_decode((ApiRequest::request('GET', route('api.rules.index')))->getBody())
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
        $data = ApiRequest::request('PUT', route('api.roles.update', $id), $request);
        return $this->response('admin.roles.index', $data, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ApiRequest::request('DELETE', route('api.roles.destroy', $id));
        return json_encode($data->getStatusCode());
    }
}
