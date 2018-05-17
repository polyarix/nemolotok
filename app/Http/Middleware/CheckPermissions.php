<?php

namespace App\Http\Middleware;

use App\Helpers\Access;
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
        if(Access::check()) {
            return $next($request);
        }

        if(preg_match('~(admin)~', \Route::getCurrentRoute()->getPrefix())) {
            return redirect()->back()->withMessage('Access denied');
        } elseif(preg_match('~(api)~', \Route::getCurrentRoute()->getPrefix())) {
            return response()->json(['message' => 'Access denied'], 403);
        }
    }
}
