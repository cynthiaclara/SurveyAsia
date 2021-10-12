<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class LinkedinController extends Controller
{
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function handleLinkedinCallback()
    {
        try {
            $user = Socialite::driver('linkedin')->user();
            $find_user = User::where('provider_id', $user->getId())->first();

            if ($find_user) {
                Auth::login($find_user);
                return redirect()->intended('/pilih');
            } else {
                $new_user = User::create([
                    'username' => $user->getName(),
                    'email' => $user->getEmail(),
                    'provider_id' => $user->getId(),
                    'password' => bcrypt('12345678')
                ]);
                Auth::login($new_user);
                return redirect()->intended('/researcher/dashboard');
            }
        } catch (Exception $e) {
            return redirect('/login');
        }
    }
}
