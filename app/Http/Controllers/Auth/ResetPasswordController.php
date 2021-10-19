<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Http\Requests\ResetPasswordRequest;

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
    protected $redirectTo = RouteServiceProvider::HOME;
    // public function reset(ResetPasswordRequest $request) {
    //     $reset_password_status = Password::reset($request->validated(), function ($user, $password) {
    //         $user->password = $password;
    //         $user->save();
    //     });

    //     if ($reset_password_status == Password::INVALID_TOKEN) {
    //         return $this->respondBadRequest(ApiCode::INVALID_RESET_PASSWORD_TOKEN);
    //     }

    //     return $this->respondWithMessage("Password has been successfully changed");
    // }

    
}
