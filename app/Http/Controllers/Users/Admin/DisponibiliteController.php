<?php

namespace App\Http\Controllers\Users\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disponibilite;

class DisponibiliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disponibilites = Disponibilite::all();
        return view('admin.disponibilite.all', compact('disponibilites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.disponibilite.add');
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
        $disponibilite = new Disponibilite([
            'titre' => $request->get('titre')
        ]);
        $disponibilite->save();
        return redirect('admin/disponibilites')->with('success', 'Disponibilité enregistrée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disponibilite = Disponibilite::find($id);
        return view('admin.disponibilite.edit', compact('disponibilite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$disciplin = Discipline::find($id);
        //return view('admin.discipline.all', compact('disciplin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disponibilite $disponibilite)
    {
        $request->validate([
            'titre' => 'required',
        ]);
  
        $discipline->update($request->all());
  
        return redirect()->route('disponibilites.index')
                        ->with('success','Disponibilité modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disponibilite = Disponibilite::findOrFail($id);
        $disponibilite->delete();
        return redirect()->route('disponibilites.index')
                        ->with('success', 'Disponibilité supprimée avec succès');
    }
}
