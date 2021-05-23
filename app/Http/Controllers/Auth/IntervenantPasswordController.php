<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Intervenant;
use App\Mail\VerifyPasswordIntervenant;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class IntervenantPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:intervenant');
    }

    public function index()
    {
        return view('user.password_intervenant');
    }

    public function show(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $inter = Intervenant::where('email', '=', $request->email)->first();
        if ($inter === null) {
            return \redirect()->route('interv.password')->with('errors', 'Désolé, email non reconnu!');
        } else {
            $inter->remember_token = Str::random(60);
            $inter->save();
            Mail::to($inter->email)->send(new VerifyPasswordIntervenant($inter));
            return \redirect()->route('interv.password')->with('success', 'Veuillez verifier votre mail pour continuer');
        }
    }

    public function sendPassword()
    {
        return view('user.password_intervenant_modify');
    }

    public function modifyPassword(Request $request)
    {
        $this->validate($request, [
            //'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'token' => Str::random(60),
        ]);

        $request['password'] = Hash::make($request->password);
        $inter = Intervenant::where('email', '=', $request->email)->first();
        var_dump($request->email);
        //$user = Intervenant::find($inter->id);
        //$request['password'] = Hash::make($request->password);
        //$inter->password = Hash::make($input['password']);
        $user->save();
        return \redirect(route('intervenant.login'))->with('success','Mot de passe modifié avec succès, connectez-vous maintenant');
    }
    
    
}
