<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\MataPelajaran;

class IsAnggotaMiddleware
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

        if (Auth::check() ){
            if (Auth::user()->checkIsAnggotaMgmp() || Auth::user()->checkIsAdminMgmp() || Auth::user()->checkIsAdmin()) {
                return $next($request);
            }
        }

        return redirect("/login");
    }
}
