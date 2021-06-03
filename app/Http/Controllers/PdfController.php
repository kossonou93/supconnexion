<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
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

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:intervenant');
    }
    
    public function generatePDF()

    {
        //$data = ['title' => 'Welcome to belajarphp.net'];

        //$pdf = PDF::loadView('pdf', $data);
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
        $pdf = PDF::loadView('pdf', compact('disciplines', 'conts', 'discips', 'langs', 'remus', 'responsabilites', 'texps', 'hors', 'dispos', 'inters', 'durs', 'modalites', 'contrats', 'disponibilites', 'durees', 'formations', 'experiences', 'interventions', 'langues', 'remunerations', 'texperiences', 'horaires','diplomes', 'villes', 'pays', 'formas'));
        return $pdf->download('laporan-pdf.pdf');
    }
}
