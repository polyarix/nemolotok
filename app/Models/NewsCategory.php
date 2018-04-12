<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'news_categories';
    protected $guarded = ['id'];
    public $timestamps = false;
}
