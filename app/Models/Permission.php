<?php

namespace App\Models;

use App\Role;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_permissions', 'permission_id');
    }

    public function rules()
    {
        return $this->belongsToMany(Rule::class, 'rules_permissions', 'permission_id');
    }
}
