<?php

namespace App\Http\Controllers\Users\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Responsabilite;

class ResponsabiliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsabilites = Responsabilite::all();
        return view('admin.responsabilite.all', compact('responsabilites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.responsabilite.add');
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
            'type' => 'required',
        ]);
        $responsabilite = new Responsabilite([
            'type' => $request->get('type')
        ]);
        $responsabilite->save();
        return redirect('admin/responsabilites')->with('success', 'responsabilite enregistrée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $responsabilite = Responsabilite::find($id);
        return view('admin.responsabilite.edit', compact('responsabilite'));
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
    public function update(Request $request, responsabilite $responsabilite)
    {
        $request->validate([
            'type' => 'required',
        ]);
  
        $responsabilite->update($request->all());
  
        return redirect()->route('responsabilites.index')
                        ->with('success','responsabilite modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $responsabilite = Responsabilite::findOrFail($id);
        $responsabilite->delete();
        return redirect()->route('responsabilites.index')
                        ->with('success', 'responsabilite supprimée avec succès');
    }
}
