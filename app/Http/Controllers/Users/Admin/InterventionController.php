<?php

namespace App\Http\Controllers\Users\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Intervention;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interventions = Intervention::all();
        return view('admin.intervention.all', compact('interventions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.intervention.add');
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
        $intervention = new Intervention([
            'type' => $request->get('type')
        ]);
        $intervention->save();
        return redirect('admin/interventions')->with('success', 'Intervention enregistrée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intervention = Intervention::find($id);
        return view('admin.intervention.edit', compact('intervention'));
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
    public function update(Request $request, Intervention $intervention)
    {
        $request->validate([
            'type' => 'required',
        ]);
  
        $intervention->update($request->all());
  
        return redirect()->route('interventions.index')
                        ->with('success','Intervention modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intervention = Intervention::findOrFail($id);
        $intervention->delete();
        return redirect()->route('interventions.index')
                        ->with('success', 'Intervention supprimée avec succès');
    }
}
