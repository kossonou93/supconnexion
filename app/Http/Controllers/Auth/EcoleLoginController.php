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
        
        // Attempt to log the user in
        if(Auth::guard('ecole')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            $user = Ecole::where('email',$request->email)->first();
            if (($user->email_verified_at) == null) {
                Auth::logout();
                return \redirect('ecole.login')->with('message', 'Vérifiez votre adresse email pour continuer svp');
            } else {
                return redirect()->intended(route('ecole.dashboard'));
            }
            
        }

        // if unsuccessful
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
