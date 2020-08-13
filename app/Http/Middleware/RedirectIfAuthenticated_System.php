<?php

namespace MastaPay\Http\Middleware;

use Closure;
use Auth;

class RedirectIfAuthenticated_System
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
        if (Auth::guard('system_admin')->check()) {
            return redirect('System/Home');
        }
        return $next($request);
    }
}
