<?php

namespace App\Http\Controllers\Admin;

use App\Traits\UserSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserViewController extends Controller
{
    use UserSettings;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index', [
            'users' => $this->userRepository->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create', [
            'roles' => $this->roleRepository->all()
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
        $validation = \Validator::make($request->all(), $this->rules());
        if($validation->fails()) {
            $errors = $validation->errors();
            $data = [
                'status' => 'error',
                'error' => $errors
            ];
        } else {
            $data = $this->userRepository->create($request);
        }

        return $this->response('admin.users.index', \GuzzleHttp\json_encode($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.show', [
            'user' => $this->userRepository->get($id)
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

        return view('admin.users.edit', [
            'user' => $this->userRepository->get($id),
            'roles' => $this->roleRepository->all(),
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
        $validation = \Validator::make($request->all(), $this->rules($id));
        if($validation->fails()) {
            $errors = $validation->errors();
            $data = [
                'status' => 'error',
                'error' => $errors
            ];
        } else {
            $data = $this->userRepository->update($id, $request);
        }

        return $this->response('admin.users.edit', json_encode($data), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return 200;
    }
}
