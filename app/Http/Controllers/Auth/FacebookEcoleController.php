<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Ecole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class FacebookEcoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:ecole')->except('logout');
        //$this->middleware('auth:intervenant');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
        
            $user = Socialite::driver('facebook')->user();
         
            $finduser = Ecole::where('facebook_id', $user->id)->first();
        
            if($finduser){
         
                Auth::guard('ecole')->login($finduser);
        
                return redirect('/ecole');
         
            }else{
                $newUser = Ecole::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'email_verified_at'=> Carbon::now(),
                    'password' => Hash::make('123456dummy')
                ]);
        
                //Auth::login($newUser);
                Auth::guard('/ecole')->login($newUser);
        
                return redirect('/ecole');
                //redirect()->intended('dashboard');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
