<?php

namespace App\Repositories\Eloquent;

use App\Contracts\RoleRepository;
use App\Role;

class EloquentRoleRepository implements RoleRepository
{
    public function all()
    {
        return Role::all();
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