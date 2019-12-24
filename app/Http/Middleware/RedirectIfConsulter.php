<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfConsulter
{

    public function handle($request, Closure $next, $guard = 'consulter')
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('consulter.dashboard');
        }

        return $next($request);
    }

}
