<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CustomAuthMiddleware
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
        // FIXME  FOR HANDLE MULTPLE GUARD
        // if (Auth::guard("web")->check()) {
            return $next($request);
        // }else if (Auth::guard("siswa")->check()){
        //     return $next($request);
        // }

        // abort(403);

    }
}
