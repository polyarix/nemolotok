<?php
namespace App\Contracts;

interface BaseRepository
{
    public function all();

    public function create($data);

    public function update($id, $data);

    public function delete($id);

    public function get($id);
}