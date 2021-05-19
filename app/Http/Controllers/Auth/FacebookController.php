<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Intervenant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class FacebookController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:intervenant')->except('logout');
        //$this->middleware('auth:intervenant');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
          
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
        
            $user = Socialite::driver('facebook')->user();
         
            $finduser = Intervenant::where('facebook_id', $user->id)->first();
        
            if($finduser){
         
                Auth::guard('intervenant')->login($finduser);
        
                return redirect('/intervenant');
         
            }else{
                $newUser = Intervenant::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'email_verified_at'=> Carbon::now(),
                    'password' => Hash::make('123456dummy')
                ]);
        
                //Auth::login($newUser);
                Auth::guard('intervenant')->login($newUser);
        
                return redirect('/intervenant');
                //redirect()->intended('dashboard');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
