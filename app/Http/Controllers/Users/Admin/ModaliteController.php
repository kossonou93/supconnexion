<?php

namespace App\Http\Controllers\Users\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modalite;

class ModaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modalites = Modalite::all();
        return view('admin.modalite.all', compact('modalites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modalite.add');
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
        $modalite = new Modalite([
            'type' => $request->get('type')
        ]);
        $modalite->save();
        return redirect('admin/modalites')->with('success', 'Modalité enregistrée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modalite = Modalite::find($id);
        return view('admin.modalite.edit', compact('modalite'));
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
    public function update(Request $request, Modalite $modalite)
    {
        $request->validate([
            'type' => 'required',
        ]);
  
        $modalite->update($request->all());
  
        return redirect()->route('modalites.index')
                        ->with('success','Modalité modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modalite = Modalite::findOrFail($id);
        $modalite->delete();
        return redirect()->route('modalites.index')
                        ->with('success', 'Modalité supprimée avec succès');
    }
}
