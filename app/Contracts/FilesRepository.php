<?php

namespace App\Contracts;

interface FilesRepository extends BaseRepository
{
    public function upload();
    public function remove();
}