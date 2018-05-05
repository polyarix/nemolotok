<?php

namespace App\Helpers;

use App\Models\Permission;

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

    public static function isAccess($action_name)
    {
        $user = \Auth::user();
        if($permission = Permission::with('roles')->where('action_name', trim($action_name))->first()){
            if($permission->roles->where('id', $user->roles->first()->id)->count() > 0) {
                return true;
            }
        }

        return false;
    }
}