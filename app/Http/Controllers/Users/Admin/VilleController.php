<?php

namespace App\Http\Controllers\Users\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Pays;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = Ville::all();
        $pays = Pays::all();
        return view('admin.ville.all', compact('villes', 'pays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Pays::all();
        return view('admin.ville.add', compact('pays'));
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
            'name' => 'required',
            'pays_id' => 'required'
        ]);
        $ville = new Ville([
            'name' => $request->get('name'),
            'pays_id' => $request->get('pays_id')
        ]);
        $ville->save();
        return redirect('admin/villes')->with('success', 'Ville enregistrée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ville = Ville::find($id);
        $pays = Pays::all();
        return view('admin.ville.edit', compact('ville', 'pays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'name' => 'required',
        ]);
  
        $villes = Ville::find($id);
        $villes->name = $input['name'];
        $villes->pays_id = $input['pays_id'];

        $villes->save();
        return redirect()->route('villes.index')
                        ->with('success','Ville modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ville = Ville::findOrFail($id);
        $ville->delete();
        return redirect()->route('villes.index')
                        ->with('success', 'Ville supprimée avec succès');
    }
}
