<?php

namespace App\Http\Controllers\Users\Ecole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Discipline;
use App\Models\Intervention;
use App\Models\Langue;
use App\Models\Annonce;
use App\Ecole;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:ecole');
    }

    public function index()
    {
        $local = Session::get("locale");
        $disciplines = Discipline::all();
        $interventions = Intervention::all();
        $langues = Langue::all();
        $annonces = Annonce::where('affiche', '=', 1)->get();
        $ecole = Ecole::find(Auth::user()->id);
        $langs = $ecole->langues;
        $inters = $ecole->interventions;
        $discips = $ecole->langues;
        return view('admin.user.ecole.annonce.all', compact('local','disciplines', 'langues', 'interventions', 'annonces', 'inters', 'discips', 'langs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplines = Discipline::all();
        $interventions = Intervention::all();
        $langues = Langue::all();
        return view('admin.user.ecole.annonce.add', compact('disciplines', 'langues', 'interventions'));
    }

    public function creer($id)
    {
        $decryt = \Crypt::decrypt($id);
        //dd($decryt);
        if ($decryt == Auth::user()->id) {
            $disciplines = Discipline::all();
            $interventions = Intervention::all();
            $langues = Langue::all();
            return view('admin.user.ecole.annonce.add', compact('disciplines', 'langues', 'interventions'));
        } else {
            return redirect()->route('checkout.credit')->with('errors', 'erreur de paiement');
        }
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'intitule' => 'required',
            'description' => 'required',
            'date_limite' => 'required',
            'dossier' => 'required',
            'adresse' => 'required',
            'disciplines' => 'required',
            'langues' => 'required',
            'interventions' => 'required',
        ]);

        $annonce = new Annonce();
        $annonce->intitule = $input['intitule'];
        $annonce->description = $input['description'];
        $annonce->date_limite = $input['date_limite'];
        $annonce->dossier = $input['dossier'];
        $annonce->adresse = $input['adresse'];
        $annonce->ecole_id = $input['ecole_id'];
        $annonce->image = $input['image'];

        if ($request->file('image')) {
            @unlink(public_path('uploads/image/annonce/'.$annonce->image));
            $annonceImage = $request->file('image');
            $annonceName  = date('d-m-Y') . '.' . uniqid() . '.' . $annonceImage->getClientOriginalName();
            $annoncePath  = public_path('uploads/image/annonce');
            $annonceImage->move($annoncePath, $annonceName);
            $annonce->image = $annonceName;
        }

        $annonce->save();

        if ($request->interventions != []) {
            $annonce->interventions()->sync(request('interventions'));
        }

        if ($request->langues != []) {
            $annonce->langues()->sync(request('langues'));
        }

        if ($request->disciplines != []) {
            $annonce->disciplines()->sync(request('disciplines'));
        }

        
        return redirect()->route('annonces.index')->with('message', 'Annonce créée avec succès!');
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
        $annonce = Annonce::find($id);
        $disciplines = Discipline::all();
        $interventions = Intervention::all();
        $langues = Langue::all();
        $annonces = Annonce::all();
        //$ecole = Ecole::find(Auth::user()->id);
        $langs = $annonce->langues;
        $inters = $annonce->interventions;
        $discips = $annonce->disciplines;
        return view('admin.user.ecole.annonce.edit', compact('local', 'annonce', 'disciplines', 'langues', 'interventions', 'annonces', 'inters', 'discips', 'langs'));
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
        $local = Session::get("locale");
        $input = $request->all();
        $validator = Validator::make($input, [
            //'intitule_fr' => 'required',
            //'description_fr' => 'required',
            'date_limite' => 'required',
            //'dossier' => 'required',
            'adresse' => 'required',
            'disciplines' => 'required',
            //'langues' => 'required',
            //'interventions' => 'required',
        ]);

        $annonce = Annonce::find($id);
        $annonce->{'intitule_'.$local} = $input['intitule_'.$local];
        $annonce->{'description_'.$local} = $input['description_'.$local];
        $annonce->date_limite = $input['date_limite'];
        $annonce->{'dossier_'.$local} = $input['dossier_'.$local];
        $annonce->adresse = $input['adresse'];
        $annonce->ecole_id = $input['ecole_id'];
        //$annonce->image = $input['image'];


        if ($request->file('image')) {
            @unlink(public_path('uploads/image/annonce/'.$annonce->image));
            $annonceImage = $request->file('image');
            $annonceName  = date('d-m-Y') . '.' . uniqid() . '.' . $annonceImage->getClientOriginalName();
            $annoncePath  = public_path('uploads/image/annonce');
            $annonceImage->move($annoncePath, $annonceName);
            $annonce->image = $annonceName;
        }

        $annonce->save();

        if ($request->interventions != []) {
            $annonce->interventions()->sync(request('interventions'));
        }

        if ($request->langues != []) {
            $annonce->langues()->sync(request('langues'));
        }

        if ($request->disciplines != []) {
            $annonce->disciplines()->sync(request('disciplines'));
        }

        
        return redirect()->route('annonces.index')->with('success', 'Annonce modifiée avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$annonce = Annonce::findOrFail($id);
        //if(\File::exists(public_path('uploads/image/annonce/'.$annonce->image))){
        //    \File::delete(public_path('uploads/image/annonce/'.$annonce->image));
        //}else{
            //dd('File does not exists.');
        //}
        $annonce = Annonce::find($id);
        $annonce->date_expiration = new \DateTime('-1 day');
        $annonce->affiche = false;
        $annonce->save();

        //$annonce->delete();
        //Storage::delete('uploads/image/annonce'.$annonce->image);
        return redirect()->route('annonces.index')->with('success', 'Annonce supprimée avec succès');
    }
}
