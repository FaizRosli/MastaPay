<?php

namespace MastaPay\Http\Controllers\System\Auth;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;
use MastaPay\model\system_admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/System/Home';
    protected $guard = 'system_admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }
    public function guard()
    {
        return auth()->guard('system_admin');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \MastaPay\User
     */
    protected function create(array $data)
    {
        return system_admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function showRegisterForm()
    {
       return view('System.Auth.Register');
    }
   
}
