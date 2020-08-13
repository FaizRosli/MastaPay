<?php

namespace MastaPay\Http\Controllers\Dropship\Auth;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;
use Password;

class ResetPasswordController extends Controller
{
    //
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/Dropship/Home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest_dropship');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('Dropship.Auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    public function reset(Request $request)
    {
        $request->validate($this->rules(), $this->validationErrorMessages());

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($request, $response)
                    : $this->sendResetFailedResponse($request, $response);
    }
    public function broker()
    {
        return Password::broker('dropship');
    }
    public function guard()
    {
        return Auth::guard('dropship');
    }
}
