<?php

namespace App\Http\Controllers\Users\Intervenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Modalite;
use App\Models\Responsabilite;
use Auth;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Lang;

class ExperienceController extends Controller
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
        $experiences = Experience::all();
        return view('admin.experience.all', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experience.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'intitule' => 'required',
            'grade' => 'required',
            'etablissement' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'intervenant_id' => 'required',
        ]);
        $experience = new Experience([
            'intitule' => $request->get('intitule'),
            'grade' => $request->get('intitule'),
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
        return redirect()->route('intervenant.dashboard')->with('success', Lang::get('public.experienceEnregister'));
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
        //$exp = Experience::find($id);
        $modales = $experience->modalites;
        //var_dump($modales);
        $respos = $experience->responsabilites;
        return view('admin.intervenant.edit_experience', compact('experience', 'modalites', 'responsabilites', 'modales', 'respos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$disciplin = Experience::find($id);
        //return view('admin.experience.all', compact('disciplin'));
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
        $request->validate([
            'intitule' => 'required',
            'etablissement' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'intervenant_id' => 'required',
        ]);
        
        $experience = Experience::find($id);
        $experience->update($request->all());
        $experience->modalites()->sync(request('modalites'));
        $experience->responsabilites()->sync(request('responsabilites'));
  
        return redirect()->route('intervenant.dashboard')->with('message', Lang::get('public.experienceModifier'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        return redirect()->route('intervenant.dashboard')
                        ->with('success', Lang::get('public.experienceSupprimer'));
    }
}
