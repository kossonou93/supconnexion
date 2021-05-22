<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Intervenant;
use App\Mail\VerifyPasswordIntervenant;

class IntervenantPasswordController extends Controller
{
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
            return \redirect()->route('intervenant.password')->with('errors', 'Désolé, email non reconnu!');
        } else {
            Mail::to($inter->email)->send(new VerifyPasswordIntervenant($inter));
            return \redirect()->route('intervenant.password')->with('success', 'Veuillez verifier votre mail pour continuer');
        }
    }

    public function sendPassword()
    {
        return view('user.password_intervenant_modify');
    }

    public function modifyPassword(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        //$request['password'] = Hash::make($request->password);
        $inter = Intervenant::where('email', '=', $request->email)->first();
        $inter->password = Hash::make($input['password']);
        $inter->save();
        return \redirect(route('intervenant.login'))->with('success','Mot de passe modifié avec succès, connectez-vous maintenant');
    }
    
    
}
