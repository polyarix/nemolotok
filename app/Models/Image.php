<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function delete()
    {
        if(file_exists(\Storage::disk('public')->path('images/'.$this->url))){
            @unlink(\Storage::disk('public')->path('images/'.$this->url));
        }
        parent::delete();
    }

    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
