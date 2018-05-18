<?php

namespace App\Http\Controllers\Api;

use App\Traits\RoleSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    use RoleSettings;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return $this->roleService->getAllRoles();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array|bool
     */
    public function store(Request $request)
    {
        return $this->roleService->createRole($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->roleService->getRoleById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return array|bool
     */
    public function update(Request $request, $id)
    {
        return $this->roleService->updateRole($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return int
     */
    public function destroy($id)
    {
        $this->roleService->deleteRole($id);
        return 204;
    }
}
