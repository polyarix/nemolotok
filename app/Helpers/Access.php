<?php

namespace App\Helpers;

use App\Models\Permission;
use App\Models\RolePermission;
use App\UserRole;

class Access
{
    public static function check()
    {
        $action_name = \Route::getCurrentRoute()->getActionName();
        if($action_name == 'L5Swagger\Http\Controllers\SwaggerController@api') {
            return true;
        }
        return self::isAccess($action_name);
    }

    public static function hasRouteAccess($route_name)
    {
        $routes = \Route::getRoutes();
        $action_name = $routes->getByName($route_name)->getActionName();

        return self::isAccess($action_name);
    }

    protected static function isAccess($action_name)
    {
        $user_id = \Auth::user()->id;
        $current_action_id = Permission::where('action_name', trim($action_name))->first()->id;
        $user_role_id = UserRole::where('user_id', $user_id)->firstOrFail()->id;

        if(RolePermission::where('role_id', $user_role_id)->where('permission_id', $current_action_id)->count() > 0) {
            return true;
        }
        return false;
    }
}