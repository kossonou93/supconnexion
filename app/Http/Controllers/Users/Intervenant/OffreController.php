<?php

namespace App\Http\Controllers\Users\Intervenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ecole;
use App\Discipline;
use App\Intervenant;
use App\Models\Intervention;
use App\Models\Langue;
use App\Models\Annonce;
use Auth;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:intervenant');
    }

    public function index()
    {
        $inter = Intervenant::find(Auth::user()->id);
        $disciplines = Discipline::all();
        $interventions = Intervention::all();
        $langues = Langue::all();
        $annonces = Annonce::where('affiche', '=', 1)->get();
        $ecoles = Ecole::all();
        $inters = $inter->interventions;
        $discips = $inter->disciplines;
        $langs = $inter->langues;
        return view('admin.user.intervenant.offre.all', compact('annonces', 'ecoles','inters','discips','langs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.intervenant.offre.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $local = Session::get("locale");
        $ecoles = Ecole::all();
        $annonce = Annonce::find($id);
        $disciplines = $annonce->disciplines()->where('annonce_id', $id)->get();
        $langues = $annonce->langues()->where('annonce_id', $id)->get();
        $interventions = $annonce->interventions()->where('annonce_id', $id)->get();
        return view('admin.user.intervenant.offre.details', compact('local', 'disciplines', 'langues', 'interventions', 'annonce', 'ecoles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
