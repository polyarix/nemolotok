<?php
namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface BaseRepository
{
    public function setModel(Model $model);

    public function all();

    public function create($data);

    public function update($id, $data);

    public function delete($id);

    public function get($id);
}