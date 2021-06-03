<?php

namespace App\Http\Controllers\Users\Intervenant;
use PDF;
use Auth;
use App\Discipline;
use App\Intervenant;
use App\Models\Contrat;
use App\Models\Diplome;
use App\Models\Disponibilite;
use App\Models\Duree;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Intervention;
use App\Models\Langue;
use App\Models\Modalite;
use App\Models\Remuneration;
use App\Models\Responsabilite;
use App\Models\TypeExperience;
use App\Models\Horaire;
use App\Models\Ville;
use App\Models\Pays;
use App\Models\Temoignage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class IntervenantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:intervenant');
    }

    public function index()
    {
        $disciplines = Discipline::all();
        $contrats = Contrat::all();
        $inter = Intervenant::find(Auth::user()->id);
        $disponibilites = Disponibilite::all();
        $durees = Duree::all();
        $formations = Formation::all();
        $experiences = Experience::where('intervenant_id', Auth::user()->id)->get();
        $interventions = Intervention::all();
        $langues = Langue::all();
        $modalites = Modalite::all();
        $remunerations = Remuneration::all();
        $responsabilites = Responsabilite::all();
        $texperiences = TypeExperience::all();
        $horaires = Horaire::all();
        $diplomes = Diplome::where('intervenant_id', Auth::user()->id)->get();
        $villes = Ville::all();
        $pays = Pays::all();
        $formas = $inter->formations;
        $langs = $inter->langues;
        $dispos = $inter->disponibilites;
        $inters = $inter->interventions;
        $durs = $inter->durees;
        $remus = $inter->remunerations;
        $texps = $inter->typeexperiences;
        $hors = $inter->horaires;
        $conts = $inter->contrats;
        $discips = $inter->disciplines;
        return view('intervenant', compact('disciplines', 'conts', 'discips', 'langs', 'remus', 'responsabilites', 'texps', 'hors', 'dispos', 'inters', 'durs', 'modalites', 'contrats', 'disponibilites', 'durees', 'formations', 'experiences', 'interventions', 'langues', 'remunerations', 'texperiences', 'horaires','diplomes', 'villes', 'pays', 'formas'));
    }

    public function generatePDF()

    {
        $disciplines = Discipline::all();
        $contrats = Contrat::all();
        $inter = Intervenant::find(Auth::user()->id);
        $disponibilites = Disponibilite::all();
        $durees = Duree::all();
        $formations = Formation::all();
        $experiences = Experience::where('intervenant_id', Auth::user()->id)->get();
        $interventions = Intervention::all();
        $langues = Langue::all();
        $modalites = Modalite::all();
        $remunerations = Remuneration::all();
        $responsabilites = Responsabilite::all();
        $texperiences = TypeExperience::all();
        $horaires = Horaire::all();
        $diplomes = Diplome::where('intervenant_id', Auth::user()->id)->get();
        $villes = Ville::all();
        $pays = Pays::all();
        $formas = $inter->formations;
        $langs = $inter->langues;
        $dispos = $inter->disponibilites;
        $inters = $inter->interventions;
        $durs = $inter->durees;
        $remus = $inter->remunerations;
        $texps = $inter->typeexperiences;
        $hors = $inter->horaires;
        $conts = $inter->contrats;
        $discips = $inter->disciplines;

        $data = [
            'disciplines' =>$disciplines,
            'conts' =>$conts,
            'discips' =>$discips,
            'langs' =>$langs,
            'remus' =>$remus,
            'responsabilites' =>$responsabilites,
            'texps' =>$texps,
            'hors' =>$hors,
            'dispos' =>$dispos,
            'inters' =>$inters,
            'durs' =>$durs,
            'modalites' =>$modalites,
            'contrats' =>$contrats,
            'disponibilites' =>$disponibilites,
            'durees' =>$durees,
            'formations' =>$formations,
            'experiences' =>$experiences,
            'interventions' =>$interventions,
            'langues' =>$langues,
            'remunerations' =>$remunerations,
            'texperiences' =>$texperiences,
            'horaires' =>$horaires,
            'diplomes' =>$diplomes,
            'villes' =>$villes,
            'pays' =>$pays,
            'formas' => $formas
        ];
        $pdf = PDF::loadView('intervenant', compact('disciplines', 'conts', 'discips', 'langs', 'remus', 'responsabilites', 'texps', 'hors', 'dispos', 'inters', 'durs', 'modalites', 'contrats', 'disponibilites', 'durees', 'formations', 'experiences', 'interventions', 'langues', 'remunerations', 'texperiences', 'horaires','diplomes', 'villes', 'pays', 'formas'));
        return $pdf->download('laporan-pdf.pdf');
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'phone' => 'required',
            'last_name' => 'required',
            'birth_day' => 'required',
            'fonction' => 'required',
            'sexe' => 'required',
        ]);
        

        $inter = Intervenant::find($id);
        $inter->name = $input['name'];
        $inter->phone = $input['phone'];
        $inter->contact = $input['contact'];
        $inter->last_name = $input['last_name'];
        $inter->birth_day = $input['birth_day'];
        $inter->fonction = $input['fonction'];
        $inter->ville_id = $input['ville_id'];
        $inter->pays_id = $input['pays_id'];
        $inter->competence = $input['competence'];
        
        if ($request->file('photo')) {
            @unlink(public_path('uploads/photo/profil'.$inter->photo));
            $interImage = $request->file('photo');
            $interName  = date('d-m-Y') . '.' . uniqid() . '.' . $interImage->getClientOriginalName();
            $interPath  = public_path('uploads/photo/profil');
            $interImage->move($interPath, $interName);
            $inter->photo = $interName;
        }

        if ($request->file('cv')) {
            @unlink(public_path('uploads/cv'.$inter->cv));
            $cvImage = $request->file('cv');
            $cvName  = date('d-m-Y') . '.' . uniqid() . '.' . $cvImage->getClientOriginalName();
            $cvPath  = public_path('uploads/cv');
            $cvImage->move($cvPath, $cvName);
            $inter->cv = $cvName;
        }
        
        $inter->linkdin = $input['linkdin'];
        $inter->sexe = $input['sexe'];
        $inter->motivation = $input['motivation'];
        //$inter->experience_id = $exp->id;
        $inter->save();

        if ($request->contrats != []) {
            $inter->contrats()->sync(request('contrats'));
        }
       
        
        if ($request->interventions != []) {
            $inter->interventions()->sync(request('interventions'));
        }
        
        if ($request->durees != []) {
            $inter->durees()->sync(request('durees'));
        }
        
        if ($request->horaires != []) {
            $inter->horaires()->sync(request('horaires'));
        }
        
        if ($request->disponibilites != []) {
            $inter->disponibilites()->sync(request('disponibilites'));
        }
        //$inter->formations()->sync(request('formations'));
       
        if ($request->remunerations != []) {
            $inter->remunerations()->sync(request('remunerations'));
        }
        
        if ($request->texperiences != []) {
            $inter->typeexperiences()->sync(request('texperiences'));
        }
        
        if ($request->langues != []) {
            $inter->langues()->sync(request('langues'));
        }
        
        if ($request->disciplines != []) {
            $inter->disciplines()->sync(request('disciplines'));
        }
        
        if ($request->texperiences != []) {
            $inter->typeexperiences()->sync(request('texperiences'));
        }
        //$inter->contrats()->attach(request('contrats'));
       

        return redirect()->route('intervenant.dashboard')->with('message', 'Intervenant modifiée avec succès!');
    }

    public function updateFormation(Request $request, $id)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'formations' => 'required',
        ]);

        $inter = Intervenant::find($id);
        if ($request->formations != []) {
            $inter->formations()->sync(request('formations'));
        }

        return redirect()->route('intervenant.dashboard')->with('message', "Type d'école ajouté avec succès!");
    }
    
    public function updateEcole(Request $request, $id)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'ecole' => 'required',
            'titre' => 'required',
            //'ville' => 'required',
        ]);

        $dip = Diplome::find($id);
        $dip->ecole = $input['ecole'];
        $dip->titre = $input['titre'];

        $dip->save();

        return redirect()->route('intervenant.dashboard')->with('message', 'Intervenant modifiée avec succès!');
    }

    public function updateContrat(Request $request, $id)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'contrats' => 'required',
        ]);

        $intervenant = Intervenant::find($id);
        $intervenant->contrats()->attach(request('contrats'));

        $dip->save();

        return redirect()->route('intervenant.dashboard')->with('message', 'Intervenant modifiée avec succès!');
    }

    public function experience(Request $request)
    {
        $request->validate([
            'intitule' => 'required',
            'etablissement' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'intervenant_id' => 'required',
        ]);
        $experience = new Experience([
            'intitule' => $request->get('intitule'),
            'etablissement' => $request->get('etablissement'),
            'debut' => $request->get('debut'),
            'fin' => $request->get('fin'),
            'description' => $request->get('description'),
            'type_intervention' => $request->get('type_intervention'),
            'heure_intervention' => $request->get('heure_intervention'),
            'niveau_participant' => $request->get('niveau_participant'),
            'nombre_participant' => $request->get('nombre_participant'),
            'support_intervention' => $request->get('support_intervention'),
            'autre' => $request->get('autre'),
            'intervenant_id' => $request->get('intervenant_id')
        ]);
        $experience->save();
        //$experience->experiences()->attach(Auth::user()->id);
        return redirect()->route('intervenant.dashboard')->with('success', 'Experience enregistrée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $experience = Experience::find($id);
        $modalites = Modalite::all();
        $responsabilites = Responsabilite::all();
        return view('admin.experience.edit', compact('experience', 'modalites', 'responsabilites'));
    }

    public function indexTemoignage()
    {
        return view('admin.temoignage.addIntervenant');
    }

    public function storeTemoignage(Request $request)
    {
        $request->validate([
            'texte' => 'required',
            'intervenant_id' => 'required',
        ]);

        $temoignage = new Temoignage();
        $temoignage->texte = $request->texte;
        $inter = Intervenant::find(Auth::user()->id);
        $temoignage->intervenant_id = $request->get('intervenant_id');
        //$temoignage->texte = $request->texte;
        $temoignage->save();
        return redirect()->route('intervenant.dashboard')->with('success', 'temoignage enregistré avec succès!');
    }

    public function download($id)
    {
        //$dl = Intervenant::find()
        return Storage::download($id);
    }
    

}
