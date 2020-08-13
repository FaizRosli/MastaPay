<?php

namespace MastaPay\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Response;

class Expired
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
        if(Auth::user()->subscription_status == 'Expired')
        {
            return new Response(view('expired'));
        }
        return $next($request);
    }
}
