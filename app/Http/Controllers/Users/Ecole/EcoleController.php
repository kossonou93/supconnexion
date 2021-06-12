<?php

namespace App\Http\Controllers\Users\Ecole;

use Auth;
use App\Discipline;
use App\Models\Ville;
use App\Models\Pays;
use App\Models\Formation;
use App\Models\Horaire;
use App\Ecole;
use App\Intervenant;
use App\Models\Langue;
use App\Models\Temoignage;
use App\Models\Contrat;
use App\Models\Diplome;
use App\Models\Disponibilite;
use App\Models\Duree;
use App\Models\Experience;
use App\Models\Intervention;
use App\Models\Modalite;
use App\Models\Remuneration;
use App\Models\Responsabilite;
use App\Models\TypeExperience;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class EcoleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:ecole');
    }

    public function index()
    {
        $disciplines = Discipline::all();
        $villes = Ville::all();
        $pays = Pays::all();
        $formations = Formation::all();
        $langues = Langue::all();
        $ecol = Ecole::find(Auth::user()->id);
        $langs = $ecol->langues;
        $ecoles = $ecol->formations;
        $discips = $ecol->disciplines;
        $hors = $ecol->horaires;
        $horaires = Horaire::all();
        //var_dump($ecole->id == 3);
        return view('ecole', compact('disciplines', 'villes', 'pays', 'formations', 'horaires', 'ecoles', 'langues', 'discips', 'langs', 'hors'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required',
            'ville_id' => 'required',
            'commune_id' => 'required',
            'phone' => 'required',
        ]);
        

        $ecole = Ecole::find($id);
        $ecole->name = $input['name'];
        $ecole->phone = $input['phone'];
        $ecole->contact = $input['contact'];
        $ecole->ville_id = $input['ville_id'];
        $ecole->pays_id = $input['pays_id'];
        $ecole->address = $input['address'];
        $ecole->about = $input['about'];
        
        if ($request->file('logo')) {
            @unlink(public_path('uploads/photo/logo'.$ecole->logo));
            $ecoleImage = $request->file('logo');
            $ecoleName  = date('d-m-Y') . '.' . uniqid() . '.' . $ecoleImage->getClientOriginalName();
            $ecolePath  = public_path('uploads/photo/logo');
            $ecoleImage->move($ecolePath, $ecoleName);
            $ecole->logo = $ecoleName;
        }
        //$ecole->linkdin = $input['linkdin'];
        
        $ecole->save();
        
        if ($request->horaires != []) {
            $ecole->horaires()->sync(request('horaires'));
        }

        if ($request->langues != []) {
            $ecole->langues()->sync(request('langues'));
        }
        
        if ($request->disciplines != []) {
            $ecole->disciplines()->sync(request('disciplines'));
        }

        return redirect()->route('ecole.dashboard')->with('message', 'Ecole modifiée avec succès!');
    }

    public function updateFormation(Request $request, $id)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'formations' => 'required',
        ]);

        $ecole = Ecole::find($id);
        if ($request->formations != []) {
            $ecole->formations()->sync(request('formations'));
        }

        return redirect()->route('ecole.dashboard')->with('success', "Type d'école ajouté avec succès!");
    }

    public function indexTemoignage()
    {
        return view('admin.temoignage.addEcole');
    }

    public function storeTemoignage(Request $request)
    {
        $request->validate([
            'texte' => 'required',
            'ecole_id' => 'required',
        ]);

        $temoignage = new Temoignage();
        $temoignage->texte = $request->texte;
        $temoignage->ecole_id = $request->get('ecole_id');
        $temoignage->save();
        return redirect()->route('ecole.dashboard')->with('success', 'temoignage enregistré avec succès!');
    }

    public function intervenants()
    {
        $intervenants = Intervenant::all();
        return view('admin.user.ecole.search', compact('intervenants'));
    }

    public function choixpaiements()
    {
        //$intervenants = Intervenant::all();
        return view('admin.user.ecole.choix_paiement');
    }

    public function choixannonces()
    {
        return view('admin.user.ecole.annonce.choix');
    }

    public function detailsintervenant($id)
    {
        $intervenant = Intervenant::find($id);

        $disciplines = Discipline::all();
        $contrats = Contrat::all();
        $disponibilites = Disponibilite::all();
        $durees = Duree::all();
        $formations = Formation::all();
        $experiences = Experience::where('intervenant_id', $intervenant->id)->get();
        $interventions = Intervention::all();
        $langues = Langue::all();
        $modalites = Modalite::all();
        $remunerations = Remuneration::all();
        $responsabilites = Responsabilite::all();
        $texperiences = TypeExperience::all();
        $horaires = Horaire::all();
        $diplomes = Diplome::where('intervenant_id', $intervenant->id)->get();
        $villes = Ville::all();
        $pays = Pays::all();
        $formas = $intervenant->formations;
        $langs = $intervenant->langues;
        $dispos = $intervenant->disponibilites;
        $inters = $intervenant->interventions;
        $durs = $intervenant->durees;
        $remus = $intervenant->remunerations;
        $texps = $intervenant->typeexperiences;
        $hors = $intervenant->horaires;
        $conts = $intervenant->contrats;
        $discips = $intervenant->disciplines;

        return view('admin.user.ecole.detailsintervenant', compact('intervenant', 'disciplines', 'conts', 'discips', 'langs', 'remus', 'responsabilites', 'texps', 'hors', 'dispos', 'inters', 'durs', 'modalites', 'contrats', 'disponibilites', 'durees', 'formations', 'experiences', 'interventions', 'langues', 'remunerations', 'texperiences', 'horaires','diplomes', 'villes', 'pays', 'formas'));
    }

    public function paiement()
    {
        return view('admin.user.ecole.annonce.paiement');
    }

    public function show($id)
    {
        \Stripe\Stripe::setApiKey('sk_test_51Euv4QKIuiqzi53Po7l1ns7jKAsAsPZ9LWiqb1ZIhHBGh3IYea6Zf5frlb3dGXTuvUEYtlwukTw8DFJGtslkv0Pw00b1jq3EiP');

        $ecole = Ecole::find(Auth::user()->id);
        $pays = Pays::find($ecole->pays_id);
        $offre = $id;
        $amount = $offre;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;
        switch ($id) {
            case 1:
                $offre = 10;
                return view('admin.user.ecole.annonce.paiement', compact('offre', 'ecole', 'pays', 'intent'));
                break;
            case 2:
                $offre = 20;
                return view('admin.user.ecole.annonce.paiement', compact('offre', 'ecole', 'pays', 'intent'));
                break;
            case 3:
                $offre = 30;
                return view('admin.user.ecole.annonce.paiement', compact('offre', 'ecole', 'pays', 'intent'));
                break;
            
            default:
                $offre = 10;
                return view('admin.user.ecole.annonce.paiement', compact('offre', 'ecole', 'pays', 'intent'));
                break;
        }
        
    }

}
