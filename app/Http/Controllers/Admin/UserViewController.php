<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ApiRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ApiRequest::request('GET', route('api.user.index'));
        return view('admin.users.index', [
            'users' => json_decode($data->getBody())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ApiRequest::request('POST', route('api.signup'), $request);
        return $this->response('admin.users.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ApiRequest::request('GET', route('api.user.show', $id));
        return view('admin.users.show', [
            'user' => json_decode($data->getBody())
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
        if(session('errors')){
            $this->errors = session('errors');
        }
        $data = ApiRequest::request('GET', route('api.user.show', $id));
        return view('admin.users.edit', [
            'user' => json_decode($data->getBody()),
            'errors' => $this->errors
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
        $data = ApiRequest::request('POST', route('api.user.update', $id), $request);

        return $this->response('admin.users.edit', $data, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ApiRequest::request('DELETE', route('api.user.destroy', $id));

        return json_encode($data->getStatusCode());
    }
}
