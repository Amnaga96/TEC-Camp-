<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotConsulter
{

    public function handle($request, Closure $next, $guard = 'consulter')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('consulter/login');
        }

        return $next($request);
    }

}
