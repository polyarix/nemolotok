<?php

namespace App\Repositories\Eloquent;

use App\Contracts\PermissionRepository;
use App\Models\Permission;

class EloquentPermissionRepository implements PermissionRepository
{
    public function all()
    {
        return Permission::all();
    }

    public function create($data)
    {

    }

    public function update($id, $data)
    {

    }

    public function delete($id)
    {

    }

    public function get($id)
    {

    }
}