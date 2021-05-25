<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ecole;

class EcoleLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:ecole')->except('logout');
    }

    public function showLoginForm()
    {
        return view('user.login_ecole');
    }

    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        
        $user = Ecole::where('email',$request->email)->first();
        if ($user === NULL) {
            return redirect()->route('ecole.login')->with('info', "Cet email n'est pas enregistré!");
        } else {
            if ($user->email_verified_at === NULL) {
                //Auth::logout();
                //Mail::to($user->email)->send(new VerifyEmail($user));
                return redirect()->route('ecole.login')->with('info', 'Vérifiez votre adresse email pour confirmer votre inscription');
            } else {
                if(Auth::guard('ecole')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
                {
                    return redirect()->route('ecole.dashboard')->with('success', 'Vous êtes connecté!');
                }else {
                    return redirect()->route('ecole.login')->with('info', "Email ou Mot de Passe incorrect!");
                }
            }
        }
        
        
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('ecole')->logout();
        return redirect()->intended('/')->with('success', 'Vous êtes déconnecté!');
    }
}
