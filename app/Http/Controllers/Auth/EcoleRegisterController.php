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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        $ecole = Ecole::create($request->all());
        $ecole->token = Str::random(60);
        $ecole->save();
        //Ecole::create($request->all());
        Mail::to($ecole->email)->send(new SignupEmail($ecole));

        //return redirect()->intended(route('ecole.dashboard'));
        return \redirect()->route('ecole.login')->with('success', 'Veuillez cliquez sur le lien qui a été envoyé sur votre mail SVP');
    }
}
