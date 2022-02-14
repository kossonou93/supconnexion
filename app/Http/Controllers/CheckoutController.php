<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Pays;
use App\Ecole;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:ecole');
    }

    public function checkout($id)
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51Euv4QKIuiqzi53Po7l1ns7jKAsAsPZ9LWiqb1ZIhHBGh3IYea6Zf5frlb3dGXTuvUEYtlwukTw8DFJGtslkv0Pw00b1jq3EiP');
        $ecole = Ecole::find(Auth::user()->id);
        $pays = Pays::find($ecole->pays_id);
        $offre = $id;
        
        switch ($id) {
            case 1:
                $offre = 100;
                break;
            case 2:
                $offre = 200;
                
                break;
            case 3:
                $offre = 300;
                
                break;
            
            default:
                $offre = 100;
                
                break;
        }

		$amount = $offre;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'XOF',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('admin.user.ecole.annonce.checkout.credit-card',compact('intent', 'pays', 'offre', 'ecole'));

    }

    public function afterPayment($id)
    {
        //echo 'Payment Has been Received';
        return redirect('/ecole/annonce/create/'.$id)->with('success', 'Paiement éffectué avec succès!');
    }

    public function checkoutIntervenant($id)
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51Euv4QKIuiqzi53Po7l1ns7jKAsAsPZ9LWiqb1ZIhHBGh3IYea6Zf5frlb3dGXTuvUEYtlwukTw8DFJGtslkv0Pw00b1jq3EiP');
        $ecole = Ecole::find(Auth::user()->id);
        $pays = Pays::find($ecole->pays_id);
        $offre = $id;
        
        switch ($id) {
            case 1:
                $offre = 100;
                break;
            case 2:
                $offre = 200;
                
                break;
            case 3:
                $offre = 300;
                
                break;
            
            default:
                $offre = 100;
                
                break;
        }

		$amount = $offre;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'XOF',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('admin.user.ecole.paiement',compact('intent', 'pays', 'offre', 'ecole'));

    }

    public function afterPaymentIntervenant($id)
    {
        return redirect('/ecole/intervenant/all/'.$id)->with('success', 'Paiement éffectué avec succès!');
    }
}
