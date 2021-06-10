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
        $disciplines = Discipline::all();
        $interventions = Intervention::all();
        $langues = Langue::all();
        $annonces = Annonce::all();
        $ecole = Ecole::find(Auth::user()->id);
        $langs = $ecole->langues;
        $inters = $ecole->interventions;
        $discips = $ecole->langues;
        return view('admin.user.ecole.annonce.all', compact('disciplines', 'langues', 'interventions', 'annonces', 'inters', 'discips', 'langs'));
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
            'disciplines' => 'required',
            'langues' => 'required',
            'interventions' => 'required',
        ]);

        $annonce = new Annonce();
        $annonce->intitule = $input['intitule'];
        $annonce->description = $input['description'];
        $annonce->date_limite = $input['date_limite'];
        $annonce->ecole_id = $input['ecole_id'];
        $annonce->image = $input['image'];

        if ($request->file('image')) {
            @unlink(public_path('uploads/image/annonce'.$annonce->image));
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
        $annonce = Annonce::find($id);
        $disciplines = Discipline::all();
        $interventions = Intervention::all();
        $langues = Langue::all();
        $annonces = Annonce::all();
        //$ecole = Ecole::find(Auth::user()->id);
        $langs = $annonce->langues;
        $inters = $annonce->interventions;
        $discips = $annonce->disciplines;
        return view('admin.user.ecole.annonce.edit', compact('annonce', 'disciplines', 'langues', 'interventions', 'annonces', 'inters', 'discips', 'langs'));
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
        $input = $request->all();

        $validator = Validator::make($input, [
            'intitule' => 'required',
            'description' => 'required',
            'date_limite' => 'required',
            'disciplines' => 'required',
            'langues' => 'required',
            'interventions' => 'required',
        ]);

        $annonce = Annonce::find($id);
        $annonce->intitule = $input['intitule'];
        $annonce->description = $input['description'];
        $annonce->date_limite = $input['date_limite'];
        $annonce->ecole_id = $input['ecole_id'];
        $annonce->image = $input['image'];

        if ($request->file('image')) {
            //@unlink(public_path('uploads/image/annonce'.$annonce->image));
            if(\File::exists(public_path('uploads/image/annonce'.$annonce->image))){
                \File::delete(public_path('uploads/image/annonce'.$annonce->image));
            }else{
            //    dd('File does not exists.');
            }
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonce = Annonce::findOrFail($id);
        if(\File::exists(public_path('uploads/image/annonce'.$annonce->image))){
            \File::delete(public_path('uploads/image/annonce'.$annonce->image));
        }else{
            dd('File does not exists.');
        }
        $annonce->delete();
        //Storage::delete('uploads/image/annonce'.$annonce->image);
        return redirect()->route('annonces.index')->with('success', 'Annonce supprimée avec succès');
    }
}
