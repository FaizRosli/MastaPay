<?php

namespace MastaPay\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class CheckIfRegisterLinkExpired
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
        $id = $request->route('id');
        $data_user = \MastaPay\User::find($id);
        
        if($data_user->subscription_status == "Expired")
        {
           //return view('welcome');
           return new Response(view('expiredlink'));
           //dd('link expired');
           
        }

        return $next($request);
    }
}
