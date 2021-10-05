<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user->getId());
            $findUser = User::where('provider_id', $user->getId())->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('/researcher/dashboard');
            } else {
                $newUser = User::create([
                    'username' => $user->getName(),
                    'email' => $user->getEmail(),
                    'provider_id' => $user->getId(),
                    'password' => bcrypt('12345678')
                ]);
                Auth::login($newUser);
                return redirect()->intended('/researcher/dashboard');
            }
        } catch (Exception $e) {
            return redirect('/login');
        }
    }
}
