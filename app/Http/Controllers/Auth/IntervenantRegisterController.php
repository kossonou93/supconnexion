<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Intervenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Experience;
use App\Models\VerifyUser;
use Auth;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Ecole;


class IntervenantRegisterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:intervenant');
    }

    public function showRegisterForm()
    {
        return view('user.inscription_intervenant');
    }

    public function register(Request $request)
    {

        //if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:intervenants'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                //'token' => Str::random(60),
            ]);
    
            $request['password'] = Hash::make($request->password);
            $inter = Intervenant::where('email', '=', $request->email)->first();
            $ecole = Ecole::where('email', '=', $request->email)->first();
            if ($inter === null && $ecole === null) {
                $inter = Intervenant::create($request->all());
                $inter->token = Str::random(60);
                $inter->save();
                Mail::to($inter->email)->send(new VerifyEmail($inter));
                return \redirect()->route('intervenant.register')->with('success', 'Votre inscription a bien été prise en compte, veuillez verifier votre mail pour confirmer');
            } else {
                return \redirect()->route('intervenant.register')->with('errors', 'Cet email existe déjà, vérifiez vos mails pour confirmer ou créez un nouveau compte avec une autre adresse');
            }

            
    }

    
}
