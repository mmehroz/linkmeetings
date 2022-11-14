<?php
namespace App\Http\Middleware;

use Closure;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class RoleAndPermissionMiddleware
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
        if (Sentinel::check())
        {
            if($request->route()->getName()!=''){
                if(Sentinel::hasAccess($request->route()->getName())) {
                    return $next($request);
                }
                else{
                    //echo $request->route()->getName(); exit;
                    //return $next($request);
                    return redirect()->route('access_denied');
                }
            }
        }
        else
        {
            return redirect()->route('login')->with('error', 'You must be logged in!');
        }
        return $next($request);
    }
}
