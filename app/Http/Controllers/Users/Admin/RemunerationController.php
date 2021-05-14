<?php

namespace App\Http\Controllers\Users\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Remuneration;

class RemunerationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remunerations = Remuneration::all();
        return view('admin.remuneration.all', compact('remunerations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.remuneration.add');
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
        $remuneration = new Remuneration([
            'type' => $request->get('type')
        ]);
        $remuneration->save();
        return redirect('admin/remunerations')->with('success', 'Rémuneration enregistré avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $remuneration = Remuneration::find($id);
        return view('admin.remuneration.edit', compact('remuneration'));
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
    public function update(Request $request, Remuneration $remuneration)
    {
        $request->validate([
            'type' => 'required',
        ]);
  
        $remuneration->update($request->all());
  
        return redirect()->route('remunerations.index')
                        ->with('success','Rémuneration modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remuneration = Remuneration::findOrFail($id);
        $remuneration->delete();
        return redirect()->route('remunerations.index')
                        ->with('success', 'Rémuneration supprimée avec succès');
    }
}
