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

        $user = Intervenant::where('email',$request->email)->first();
        if ($user === NULL) {
            return redirect()->route('intervenant.login')->with('info', "Cet email n'est pas enregistré!");
        } else {
            if ($user->email_verified_at === NULL) {
                //Auth::logout();
                //Mail::to($user->email)->send(new VerifyEmail($user));
                return redirect()->route('intervenant.login')->with('info', 'Vérifiez votre adresse email pour confirmer votre inscription');
            } else {
                if(Auth::guard('intervenant')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
                {
                    return redirect()->route('intervenant.dashboard')->with('success', 'Vous etes connecté!');
                }else {
                    return redirect()->route('intervenant.login')->with('info', "Email ou Mot de Passe incorrect!");
                }
            }
        }
        
        
        //return redirect()->back()->withInput($request->only('email','remember'));
        //}
        
    }
}
