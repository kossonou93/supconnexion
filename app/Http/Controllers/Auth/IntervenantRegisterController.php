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
                'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                //'token' => Str::random(60),
            ]);
    
            $request['password'] = Hash::make($request->password);
            //$data = [
            //    'name' => $request['name'],
            //    'verification_code' => 'ADSKDLL'
            //];
            //Mail::to($request['email'])->send(new SignupEmail($data));
            
            $inter = Intervenant::create($request->all());
            $inter->token = Str::random(60);
            $inter->save();
            //VerifyUser::create([
            //    'token' => Str::random(60),
            //    'user_id' => $inter->id,
            //]);
            Mail::to($inter->email)->send(new VerifyEmail($inter));
            //->subject('Activation de compte utilisateur');

            //return redirect()->intended(route('intervenant.dashboard'));
            return \redirect()->route('intervenant.login')->with('success', 'Veuillez verifier votre mail pour confirmer votre inscription');
        //}
    }

    
}
