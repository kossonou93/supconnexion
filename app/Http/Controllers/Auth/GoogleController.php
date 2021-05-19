<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\Intervenant;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Http\Controllers\Auth\IntervenantLoginController;

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
     
                //Auth::login($finduser);
                IntervenantLoginController::login($newUser);
    
                //return redirect('/home');
                return redirect()->route('intervenant.dashboard')->with('message', 'Vous etes connecté!');
     
            }else{
                $newUser = Intervenant::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'email_verified_at'=> Carbon::now(),
                    'password' => Hash::make('Superman_test')
                    //'password' => Hash::make($user->password),
                ]);
    
                //Auth::login($newUser);
                IntervenantLoginController::login($newUser);
     
                return redirect()->route('intervenant.dashboard')->with('message', 'Vous etes connecté!');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}
