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

        $user = Intervenant::where('email',$request->email)->first();
        if ($user->email === NULL) {
            return redirect()->route('intervenant.login')->with('errors', 'login');
        } else {
            if ($user->email_verified_at === NULL) {
                //Auth::logout();
                Mail::to($inter->email)->send(new VerifyEmail($inter));
                return redirect()->route('intervenant.login')->with('info', 'Vérifiez votre adresse email pour continuer svp');
            } else {
                if(Auth::guard('intervenant')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
                {
                    return redirect()->route('intervenant.dashboard')->with('info', 'login ou mot de passe incorrect');
                }
            }
        }
        
        
        return redirect()->back()->withInput($request->only('email','remember'));
        //}
        
    }
}
