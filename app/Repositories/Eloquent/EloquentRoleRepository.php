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
        $role = Role::create($data->only(['name']));

        if (is_string($data->get('rules'))) {
            $access_rules = explode(',', $data->get('rules'));
        } else {
            $access_rules = $data->get('rules');
        }

        $role->rules()->attach($access_rules);

        return $role;
    }

    public function update($id, $data)
    {
        $role = Role::findOrFail($id);
        $role->update($data->only(['name']));
        if (is_string($data->get('rules'))) {
            $access_rules = explode(',', $data->get('rules'));
        } else {
            $access_rules = $data->get('rules');
        }

        $role->rules()->sync($access_rules);
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return true;
    }

    public function get($id)
    {
        return Role::with('rules')->findOrFail($id);
    }
}