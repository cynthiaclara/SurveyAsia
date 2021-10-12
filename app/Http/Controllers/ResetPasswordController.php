<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Support\Facades\Password;
use Sentinel;
use Reminder;
use App\User;
use mail;

use Illuminate\Support\Facades\Log;

class ResetPasswordController extends Controller
{

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function resetPassword(Request $request, $email, $code)
    {

        $user->forceFill([
            'password' => bcrypt($password),
            'remember_token' => Str::random(60),
        ])->save();

        event(new PasswordReset($user));

        return redirect('login');

        // $this->guard()->login($user);
    }


        // $this->validate($request, [
        // 'password' => 'required|min:8|confirmed',
        // 'password_confirmation' => 'required|min8'
         }

    $user = User::whereEmail($email)->first();
    if($user == null){
        echo 'Email not exists';
    }
   
    $user = Sentinel::findById($user->id);
    $reminder = Reminder::exists($user);

    if($reminder){
        if($code == $reminder->code){
            Reminder::complete($user, $code, $request->password);
            return redirect('/login')->with('success', 'Password reset. Please login with new password!');

        }else{
            return redirect('/')->with(compact('user'));
        }
        }else{
            echo 'time expired';
    }

    


