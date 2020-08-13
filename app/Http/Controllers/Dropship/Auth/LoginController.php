<?php

namespace MastaPay\Http\Controllers\Dropship\Auth;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;
    
    protected $guard = 'dropship';
    protected $redirectTo = '/Dropship/Home';

    public function __construct()
    {
        $this->middleware('guest_dropship')->except('logout');
    }

    public function logout(Request $request)
    {
        //dd("logout");
        Auth::guard('dropship')->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/Dropship/Login');

    //     // Auth::logout('dropship');
    //     // return $this->loggedOut($request) ?: redirect('/');
     }

     public function ShowLoginForm()
     {
         return view('Dropship.Auth.login');
     }

     public function login(Request $request)
     {
        if (auth()->guard('dropship')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            //return redirect('/Dropship/Home');//->route('/Dropship/Home');
           // return redirect()->intended('/Dropship/Home');//->route('/Dropship/Home');
           return redirect()->intended('/Dropship/ListBusiness');
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
     }

}
