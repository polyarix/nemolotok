<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function morph()
    {
        return $this->morphTo();
    }
}
