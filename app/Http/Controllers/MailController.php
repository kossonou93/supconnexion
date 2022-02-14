<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SignupEmail;
use App\Models\VerifyUser;
use App\Intervenant;
use App\Ecole;
use Carbon\Carbon;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function sendEmail()
    {
        $data = [
            'name' => "Kossonou",
            'verification_code' => 'ADSKDLL'
        ];

        Mail::to('kossonou93@hotmail.fr')->send(new SignupEmail($data));
    }

    public function verifyEmail($token){
        //var_dump($token);
        $verifiedUser = Intervenant::where('token',$token)->first();
        //var_dump($verifiedUser);
        if (isset($verifiedUser)) {
            $user = $verifiedUser;
            
            if (!$user->email_verified_at) {
                $user->email_verified_at = Carbon::now();
                $user->save();
                return \redirect(route('intervenant.login'))->with('success','Votre email a été bien vérifié');
            } else {
                return \redirect()->back()->with('info','Votre email a été déjà vérifié');
            }
        } else {
               
            return \redirect('intervenant.login')->with('error','Something went wrong!!');
        }
        
    }

    public function verifyEmailEcole($token){
        //var_dump($token);
        $verifiedUser = Ecole::where('token',$token)->first();
        //var_dump($verifiedUser);
        if (isset($verifiedUser)) {
            $user = $verifiedUser;
            
            if (!$user->email_verified_at) {
                $user->email_verified_at = Carbon::now();
                $user->save();
                return \redirect(route('ecole.login'))->with('success','Votre email a été bien vérifié');
            } else {
                return \redirect()->back()->with('info','Votre email a été déjà vérifié');
            }
        } else {
               
            return \redirect('ecole.login')->with('error','Something went wrong!!');
        }
        
    }
    //*/

    public function verifyPasswordIntervenant($token){
        //var_dump($token);
        $verifiedUser = Intervenant::where('remember_token',$token)->first();
        //var_dump($verifiedUser);
        if (isset($verifiedUser)) {
            $user = $verifiedUser;
            return view('user.password_intervenant_modify', compact('user'));
            //return \redirect(route('interv.password.send'))->with('info','Modifiez maintenant votre mot de passe!');
        } else {
               
            return \redirect('interv.password.send')->with('error','Erreur de confirmation veillez rééssayer ultérieurement!!');
        }
        
    }

    public function verifyPasswordEcole($token){
        //var_dump($token);
        $verifiedUser = Ecole::where('remember_token',$token)->first();
        //var_dump($verifiedUser);
        if (isset($verifiedUser)) {
            $user = $verifiedUser;
            return view('user.password_ecole_modify', compact('user'));
            //return \redirect(route('interv.password.send'))->with('info','Modifiez maintenant votre mot de passe!');
        } else {
               
            return \redirect('ecol.password.send')->with('error','Erreur de confirmation veillez rééssayer ultérieurement!!');
        }
        
    }
}
