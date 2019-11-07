<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /* ajout */
    public function showResetForm(Request $request, $token = null)
{
    return view('auth.passwords.reset')->with(
        ['token' => $token, 'email' => $request->email]
    );
}
 public function reset(\Illuminate\Http\Request $request) {
    $this->validate($request, [
        'token' => 'required', 'email' => 'required|email',
        'password' => 'required|confirmed|min:6',
    ]);
  /*   $response = $this->broker()->reset(
        $this->credentials($request), function ($user, $password) {
            $this->resetPassword($user, $password);
        }
    ); */
 } 

}
