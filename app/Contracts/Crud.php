<?php

namespace App\Contracts;

interface Crud
{
    public function all();

    public function create($data);

    public function update($id, $data);

    public function delete($id);

    public function get($id);
}