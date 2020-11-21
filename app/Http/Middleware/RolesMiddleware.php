<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        if(Auth::user()->roles->name_roles != $roles){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
