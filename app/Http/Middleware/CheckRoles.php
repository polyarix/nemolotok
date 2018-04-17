<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
{
    protected $trigger = false;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        if (preg_match('/\|/', $roles)) {
            $roles_list = explode('|', $roles);
        } else {
            $roles_list = [];
            $roles_list[] = $roles;

        }

        foreach($roles_list as $role)
        {
            if($request->user()->hasRole($role)) {
                $this->trigger = true;
            }
        }

        if($this->trigger) {
            return $next($request);
        } else {
            return redirect()->back()->with(['message' => 'У вас недостаточно прав']);
        }


    }
}
