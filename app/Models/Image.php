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

    public function delete()
    {
        if(file_exists(\Storage::disk('public')->path($this->url))){
            @unlink(\Storage::disk('public')->path($this->url));
        }
        parent::delete();
    }
}
