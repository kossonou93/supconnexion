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
    public function __construct()
    {
        $this->middleware('guest:intervenant')->except('logout');
        //$this->middleware('auth:intervenant');
    }

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
     
                //($finduser);
                Auth::guard('intervenant')->login($finduser);
                //Auth::guard('intervenant')->attempt(['email' => $finduser->email, 'password' => $finduser->password]);
                return redirect('/intervenant');
                //view('user.login_intervenant');
                //redirect()->route('intervenant.dashboard')->with('message', 'Vous etes connecté!');
     
            }else{
                $newUser = Intervenant::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'email_verified_at'=> Carbon::now(),
                    'password' => Hash::make('Superman_test')
                    //'password' => Hash::make($user->password),
                ]);
                //Auth::guard('intervenant')->attempt(['email' => $newUser->email, 'password' => $newUser->password], $newUser->remember);
                Auth::guard('intervenant')->attempt($newUser);
                //login($newUser);
                //IntervenantLoginController::login($newUser);
     
                return redirect('/intervenant');
                //redirect()->route('intervenant.dashboard')->with('message', 'Vous etes connecté!');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}
