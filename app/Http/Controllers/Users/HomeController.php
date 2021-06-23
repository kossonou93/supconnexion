<?php

namespace App\Http\Controllers\Users;
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
use App\Models\Commune;
use App\Models\Carousel;
use App\Models\Partenaire;
use App\Models\Temoignage;
use App\Models\Actualite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Annonce;
use Carbon\Carbon;
use App\Ecole;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $intervenants = Intervenant::take(4)->get();
        $carousels = Carousel::all();
        $partenaires = Partenaire::all();
        $temoignages = Temoignage::all();
        //$mytime = Carbon::now();//->toDateTimeString();
        //$mytime = new \DateTime("now");
        //dd($mytime);
        $annonces = Annonce::where('date_expiration', '>=', Carbon::today()->toDateString())->get();
        $ecoles = Ecole::all();
        $nbecole = $ecoles->count();
        $nbannonce = $annonces->count();
        $nbintervenant = $intervenants->count();
        $nbpartenaire = $partenaires->count();
        //Carousel $carousel;
        //$carousel->visists()->increment();
        $actualites = Actualite::take(3)->orderBy('id', 'DESC')->get();
        return view('home', compact('nbpartenaire', 'nbecole', 'nbannonce', 'nbintervenant', 'ecoles', 'intervenants', 'carousels', 'partenaires','temoignages', 'actualites', 'annonces'));
    }

    public function annonces()
    {
        $intervenants = Intervenant::take(4)->get();
        $carousels = Carousel::all();
        $partenaires = Partenaire::all();
        $temoignages = Temoignage::all();
        $annonces = Annonce::where('date_expiration', '>=', Carbon::today()->toDateString())->get();
        $ecoles = Ecole::all();
        $actualites = Actualite::take(3)->orderBy('id', 'DESC')->get();
        return view('user.annonces', compact('ecoles', 'intervenants', 'carousels', 'partenaires','temoignages', 'actualites', 'annonces'));
    }

    public function annonce($id)
    {
        //$disciplines = Discipline::all();
        $ecoles = Ecole::all();
        $annonce = Annonce::find($id);
        $disciplines = $annonce->disciplines()->where('annonce_id', $id)->get();
        $langues = $annonce->langues()->where('annonce_id', $id)->get();
        $interventions = $annonce->interventions()->where('annonce_id', $id)->get();
        return view('user.annonce', compact('disciplines', 'langues', 'interventions', 'annonce', 'ecoles'));
    }

    public function leprojet()
    {
        return view('user.projet');
    }

    public function actualites()
    {
        $actualites = Actualite::all();
        return view('user.actualites', compact('actualites'));
    }

    public function actualite($id)
    {
        $actualite = Actualite::find($id);
        return view('user.actualite', compact('actualite'));
    }
    
}
