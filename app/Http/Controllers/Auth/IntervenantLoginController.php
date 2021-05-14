<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Experience;
use App\Intervenant;


class IntervenantLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:intervenant')->except('logout');
        //$this->middleware('auth:intervenant');
    }

    public function showLoginForm()
    {
        return view('user.login_intervenant');
    }

    public function login(Request $request)
    {
        //if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Attempt to log the user in
        if(Auth::guard('intervenant')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            $user = Intervenant::where('email',$request->email)->first();
            //var_dump($user->email_verified_at);
            
            if (($user->email_verified_at) == null) {
                Auth::logout();
                return \redirect('intervenant.login')->with('message', 'Vérifiez votre adresse email pour continuer svp');
            } else {
                return redirect()->intended(route('intervenant.dashboard'));
            }
            //return \redirect('intervenant.dashboard')->with('success','Bienvenue sur votre profil, profitez des avantages de SupConnexion');
            
        }

        // if unsuccessful
        return redirect()->back()->withInput($request->only('email','remember'));
        //}
        
    }
}
