<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class FacebookController extends Controller
{
    public function facebookpage( )
    {
        return Socialite::driver('facebook')->redirect( );
    }

    public function facebookredirect( ){
        try {
      
            $user = Socialite::driver('facebook')->user();
       
            $finduser = User::where('facebook_id', $user->id)->first();
       
            if($finduser)

            {
       
                Auth::login($finduser);
      
                return redirect()->intended('dashboard');
       
            }

            else

            {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('dashboard');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }

    }
}
