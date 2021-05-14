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
        $actualites = Actualite::take(3)->orderBy('id', 'DESC')->get();
        return view('home', compact('intervenants', 'carousels', 'partenaires','temoignages', 'actualites'));
    }

    
}
