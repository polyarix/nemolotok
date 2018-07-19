<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements \App\Contracts\BaseRepository
{
    protected $model;
    public function setModel(Model $model)
    {
        $this->model = $model;
    }

    public function getModel() : String
    {
        return get_class($this->model);
    }
}