<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Ecole;
use App\Mail\VerifyPasswordEcole;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class EcolePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:ecole');
    }

    public function index()
    {
        return view('user.password_ecole');
    }

    public function show(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $ecol = Ecole::where('email', '=', $request->email)->first();
        if ($ecol === null) {
            return \redirect()->route('ecol.password')->with('errors', 'Désolé, email non reconnu!');
        } else {
            $ecol->remember_token = Str::random(60);
            $ecol->save();
            Mail::to($inter->email)->send(new VerifyPasswordEcole($inter));
            return \redirect()->route('ecol.password')->with('success', 'Veuillez verifier votre mail pour continuer');
        }
    }

    public function sendPassword()
    {
        return view('user.password_ecole_modify');
    }

    public function modifyPassword(Request $request)
    {
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        $ecol = Ecole::where('email', '=', $request->email)->first();
        $ecol->password = $request['password'];
        $ecol->save();
        return \redirect(route('ecole.login'))->with('success','Mot de passe modifié avec succès, connectez-vous maintenant');
    }
}
