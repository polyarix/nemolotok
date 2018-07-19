<?php
namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface BaseRepository
{
    public function setModel(Model $model);

    /**
     * @return String - model class name
     */
    public function getModel(): String;
}