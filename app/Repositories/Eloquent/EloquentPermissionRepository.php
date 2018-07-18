<?php

namespace App\Repositories\Eloquent;

use App\Contracts\PermissionRepository;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class EloquentPermissionRepository implements PermissionRepository
{
    private $model;

    public function setModel(Model $model)
    {
        $this->model = $model;
    }

    public function __construct(Permission $model)
    {
        $this->setModel($model);
    }

    public function all()
    {
        return $this->model->all();
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