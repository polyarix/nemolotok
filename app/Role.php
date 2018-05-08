<?php

namespace App;

use App\Models\Permission;
use App\Models\Rule;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function rules()
    {
        return $this->belongsToMany(Rule::class, 'rules_roles', 'role_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
