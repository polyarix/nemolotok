<?php

namespace App\Http\Controllers\Api;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    public $rules = [
        'name' => 'required|min:3|max:50|string|unique:roles'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Role::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = \Validator::make($request->all(), $this->rules);

        if ($validation->fails()) {
            $errors = $validation->errors();
            $json = [
                'status' => 'error',
                'error' => $errors
            ];
            return \Response::json($json);
        } else {
            if ($role = Role::create($request->only(['name']))) {
                if (is_string($request->get('rules'))) {
                    $access_rules = explode(',', $request->get('rules'));
                } else {
                    $access_rules = $request->get('rules');
                }

                $role->rules()->attach($access_rules);
            }

            return $role;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Role::with('rules')->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = \Validator::make($request->all(), $this->rules);

        if ($validation->fails()) {
            $errors = $validation->errors();
            $json = [
                'status' => 'error',
                'error' => $errors
            ];
            return \Response::json($json);
        } else {
            $role = Role::findOrFail($id);
            $role->update($request->only(['name']));
            if (is_string($request->get('rules'))) {
                $access_rules = explode(',', $request->get('rules'));
            } else {
                $access_rules = $request->get('rules');
            }

            $role->rules()->sync($access_rules);


            return $role;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return 204;
    }
}
