<?php

namespace MastaPay\Http\Controllers\Dropship\Auth;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;
use MastaPay\model\dropship;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    //
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/Dropship/Home';
    protected $guard = 'dropship';

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
            'email' => ['required', 'string', 'email', 'max:191', 'unique:dropship'],
            'full_name' => ['required', 'string', 'max:191'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_id' => [],
        ]);
    }
    public function guard()
    {
        return auth()->guard('dropship');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \MastaPay\User
     */
    protected function create(array $data)
    {
       
        $data_dropship = dropship::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
        ]);
        $data_user = \MastaPay\User::find($data['user_id']);
        $data_user->Dropship()->attach($data_dropship);

        return $data_dropship;

         


    }
    public function ShowRegisterDropshipForm($id)
    {
        //dd($id);
       return view('Dropship.Auth.Register',['user_id'=>$id]);
    }
   
}
