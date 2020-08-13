<?php

namespace MastaPay\Http\Controllers\System\Auth;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;
    
    protected $guard = 'system_admin';
    protected $redirectTo = '/System/Home';

    public function __construct()
    {
        $this->middleware('guest_system')->except('logout');
    }

    public function logout(Request $request)
    {
        //dd("logout");
        Auth::guard('system_admin')->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/System/Login');

    //     // Auth::logout('dropship');
    //     // return $this->loggedOut($request) ?: redirect('/');
     }

     public function ShowLoginForm()
     {
         return view('System.Auth.login');
     }

     public function login(Request $request)
     {
         
        if (auth()->guard('system_admin')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            //return redirect('/Dropship/Home');//->route('/Dropship/Home');
            return redirect()->intended('/System/Home');//->route('/Dropship/Home');
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
     }

     public function guard()
    {
        return auth()->guard('system_admin');
    }
}
