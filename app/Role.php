<?php

namespace App;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $guarded = ['id'];

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }
}
