<?php

namespace App\Repositories\Eloquent;

use App\Contracts\RoleRepository;
use App\Repositories\BaseRepository;
use App\Role;
use Illuminate\Database\Eloquent\Model;

class EloquentRoleRepository extends BaseRepository implements RoleRepository
{
    public function __construct(Role $model)
    {
        $this->setModel($model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        $role = $this->model->create($data->only(['name']));

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
        $role = $this->model->findOrFail($id);
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
        $role = $this->model->findOrFail($id);
        $role->delete();
        return true;
    }

    public function get($id)
    {
        return $this->model->with('rules')->findOrFail($id);
    }
}