<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class socialController extends Controller
{
    public function redirect()
    {
       return Socialite::driver('google')->redirect();
    }
    
    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();

        $finduser = User::where('email', $user->email)->first();
        if ($finduser) {+
            Auth::login($finduser);
            return redirect('/');
        } else {
            $newUser = User::updateOrCreate(
                ['email' => $user->email],
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make("password")
                ]
            );

            Auth::login($newUser);

            return redirect('/');
        }
        
    }
}
