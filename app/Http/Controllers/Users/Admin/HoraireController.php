<?php

namespace App\Http\Controllers\Users\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Horaire;

class HoraireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horaires = Horaire::all();
        return view('admin.horaire.all', compact('horaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.horaire.add');
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
            'titre' => 'required',
        ]);
        $horaire = new Horaire([
            'titre' => $request->get('titre')
        ]);
        $horaire->save();
        return redirect('admin/horaires')->with('success', 'Horaire enregistrée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horaire = Horaire::find($id);
        return view('admin.horaire.edit', compact('horaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$horair = Horaire::find($id);
        //return view('admin.horaire.all', compact('horair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horaire $horaire)
    {
        $request->validate([
            'titre' => 'required',
        ]);
  
        $horaire->update($request->all());
  
        return redirect()->route('horaires.index')
                        ->with('success','Horaire modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horaire = Horaire::findOrFail($id);
        $horaire->delete();
        return redirect()->route('horaires.index')
                        ->with('success', 'Horaire supprimée avec succès');
    }
}
