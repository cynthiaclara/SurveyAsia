<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();

            $find_user = User::where('provider_id', $user->getId())->first();
            if ($find_user) {
                Auth::login($find_user);
                return redirect()->intended('/researcher/dashboard');
            } else {
                $new_user = User::create([
                    'username' => $user->getName(),
                    'email' => $user->getEmail(),
                    'provider_id' => $user->getId(),
                    'avatar' => $user->getAvatar(),
                    'password' => bcrypt('12345678')
                ]);

                Auth::login($new_user);
                return redirect()->intended('/pilih');
            }
        } catch (Exception $e) {
            return redirect('/login');
        }
    }
}
