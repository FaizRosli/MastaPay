<?php

namespace MastaPay\Http\Middleware;

use Closure;
use Auth;

class RedirectIfAuthenticated_Dropship
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //dd(Auth::guard('dropship')->check());
        if (Auth::guard('dropship')->check()) {
            return redirect('Dropship/Home');
        }

        return $next($request);
    }
}

