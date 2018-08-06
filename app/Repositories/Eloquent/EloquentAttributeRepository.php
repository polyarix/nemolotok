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
        // TODO: Implement create() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }
}