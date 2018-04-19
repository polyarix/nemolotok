<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use App\Models\RolePermission;
use App\UserRole;
use Closure;

class CheckPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_id = \Auth::user()->id;

        $current_action_id = Permission::where('action_name', \Route::getCurrentRoute()->getActionName())->first()->id;
        $user_role_id = UserRole::where('user_id', $user_id)->firstOrFail()->id;

        if(RolePermission::where('role_id', $user_role_id)->where('permission_id', $current_action_id)->count() > 0) {
            return $next($request);
        }

        if(preg_match('~(admin)~', \Route::getCurrentRoute()->getPrefix())) {
            return redirect()->back()->withMessage('Access denied');
        } elseif(preg_match('~(api)~', \Route::getCurrentRoute()->getPrefix())) {
            return response()->json(['message' => 'Access denied'], 403);
        }
    }
}
