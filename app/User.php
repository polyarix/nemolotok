<?php

namespace App;

use App\Models\Permission;
use App\Models\RolePermission;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }

    public function hasRole($role)
    {
        $role_id = Role::where('name', $role)->firstOrFail()->id;
        if(UserRole::where('user_id', \Request::user()->id)->where('role_id', $role_id)->count()>0) {
            return true;
        }

        return false;
    }

}
