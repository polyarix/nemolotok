<?php

namespace App;

use App\Models\Permission;
use App\Models\RolePermission;
use App\Models\Rule;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
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


    public function hasRole($role)
    {
        $role_id = Role::where('name', $role)->firstOrFail()->id;
        if(UserRole::where('user_id', \Request::user()->id)->where('role_id', $role_id)->count()>0) {
            return true;
        }

        return false;
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function rule()
    {
        $role = $this->role()->firstOrFail();
        $rules = $role->rules()->wherePivot('rule_id', 1)->get();
        return $rules;
    }
}
