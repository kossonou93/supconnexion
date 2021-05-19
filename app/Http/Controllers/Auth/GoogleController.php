<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\Intervenant;

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
     
            $finduser = Intervenant::where('google_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/home');
     
            }else{
                $newUser = Intervenant::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make($user->password)
                ]);
    
                Auth::login($newUser);
     
                return redirect('/home');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}
