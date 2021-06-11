<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Experience;
use App\Intervenant;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;


class IntervenantLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:intervenant')->except(['logout', 'logoutIntervenant']);
    }

    public function showLoginForm()
    {
        return view('user.login_intervenant');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = Intervenant::where('email',$request->email)->first();
        if ($user === NULL) {
            return redirect()->route('intervenant.login')->with('info', "Cet email n'est pas enregistré!");
        } else {
            if ($user->email_verified_at === NULL) {
                return redirect()->route('intervenant.login')->with('info', 'Vérifiez votre adresse email pour confirmer votre inscription');
            } else {
                if(Auth::guard('intervenant')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
                {
                    return redirect()->route('intervenant.dashboard')->with('success', 'Vous êtes connecté!');
                }else {
                    return redirect()->route('intervenant.login')->with('info', "Email ou Mot de Passe incorrect!");
                }
            }
        }
        
        return redirect()->back()->withInput($request->only('email','remember'));
        
    }

    public function logoutIntervenant(Request $request)
    {
        Auth::guard('intervenant')->logout();
        return redirect()->route('home')->with('success', 'Vous êtes déconnecté!');
    }
    
}
