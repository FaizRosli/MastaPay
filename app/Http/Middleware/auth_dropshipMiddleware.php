<?php

namespace MastaPay\Http\Middleware;

use Closure;
use Auth;

class auth_dropshipMiddleware
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
        //dd(auth('dropship')->user());
        if(!auth('dropship')->user())
        {
            //dd("belum login oi");
            return redirect('Dropship/Login');
        }
    
            return $next($request);
        
    }

    
    
}
