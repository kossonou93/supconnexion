<?php

namespace App\Http\Controllers\Users\Intervenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diplome;
use Auth;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Lang;

class DiplomeController extends Controller
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
        $diplomes = Diplome::all();
        return view('admin.diplome.all', compact('diplomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.diplome.add');
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
            'ecole' => 'required',
            'titre' => 'required',
            'grade' => 'required',
            'intervenant_id' => 'required',
        ]);
        $diplome = new Diplome([
            'ecole' => $request->get('ecole'),
            'titre' => $request->get('titre'),
            'grade' => $request->get('grade'),
            'intervenant_id' => $request->get('intervenant_id')
        ]);
        $diplome->save();
        return redirect()->route('intervenant.dashboard')->with('message', Lang::get('public.diplomeEnregister'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diplome = Diplome::find($id);
        return view('admin.intervenant.edit_diplome', compact('diplome'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$disciplin = Diplome::find($id);
        //return view('admin.diplome.all', compact('disciplin'));
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
        //var_dump($request);

        $request->validate([
            'ecole' => 'required',
            'titre' => 'required',
            'grade' => 'required',
            'intervenant_id' => 'required',
        ]);

        $diplome = Diplome::find($id);
        $diplome->update($request->all());
  
        return redirect()->route('intervenant.dashboard')
                        ->with('success', Lang::get('public.diplomeModifier'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diplome = Diplome::findOrFail($id);
        $diplome->delete();
        return redirect()->route('intervenant.dashboard')
                        ->with('success', Lang::get('public.diplomeSupprimer'));
    }
}
