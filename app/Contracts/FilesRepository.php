<?php

namespace App\Contracts;

interface FilesRepository extends BaseRepository
{
    public static function upload();
    public static function remove();
}