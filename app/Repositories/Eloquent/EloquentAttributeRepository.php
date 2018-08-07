<?php

namespace App\Repositories\Eloquent;

use App\Contracts\AttributeRepository;
use App\Models\Attribute;
use App\Repositories\BaseRepository;

class EloquentAttributeRepository extends BaseRepository implements AttributeRepository
{
    public function __construct(Attribute $model)
    {
        $this->setModel($model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data)
    {
       return $this->model->create($data->only('name'));
    }

    public function update($id, $data)
    {
        return $this->model->update($data->only('name'));
    }

    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    public function get($id)
    {
        return $this->model->findOrFail($id);
    }
}