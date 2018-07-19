<?php

namespace App\Contracts;

interface FilesRepository
{
    public function upload();
    public function remove();
}