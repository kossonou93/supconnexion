<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Ecole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Mail\VerifyEmail;
use App\Mail\SignupEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Intervenant;

class EcoleRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:ecole');
    }

    public function showRegisterForm()
    {
        //return view('auth.ecole-register');
        return view('user.inscription_ecole');
    }

    public function register(Request $request)
    {
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:ecoles'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        $request['password'] = Hash::make($request->password);
        $ecole = Ecole::where('email', '=', $request->email)->first();
        $inter = Intervenant::where('email', '=', $request->email)->first();
        if ($ecole === null && $inter === null) {
            // user doesn't exist
            $ecole = Ecole::create($request->all());
            $ecole->token = Str::random(60);
            $ecole->save();
            //Ecole::create($request->all());
            Mail::to($ecole->email)->send(new SignupEmail($ecole));
            return \redirect()->route('ecole.register')->with('success', 'Votre inscription a bien été prise en compte, veuillez verifier votre mail pour confirmer');
        } else {
            return \redirect()->route('ecole.register')->with('errors', 'Cet email existe déjà, vérifiez vos mails pour confirmer ou créez un nouveau compte avec une autre adresse');
        }
        

        //return redirect()->intended(route('ecole.dashboard'));
        
    }
}
