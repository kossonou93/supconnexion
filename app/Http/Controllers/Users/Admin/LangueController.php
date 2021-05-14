<?php

namespace App\Http\Controllers\Users\Admin;
use App\Models\Langue;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LangueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $langues = Langue::all();
        return view('admin.langue.all', compact('langues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.langue.add');
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
        ]);
        $langue = new Langue([
            'name' => $request->get('name')
        ]);
        $langue->save();
        return redirect('admin/langues')->with('success', 'Langue enregistrée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $langue = Langue::find($id);
        return view('admin.langue.edit', compact('langue'));
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
    public function update(Request $request, Langue $langue)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        $langue->update($request->all());
  
        return redirect()->route('langues.index')
                        ->with('success','Langue modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $langue = Langue::findOrFail($id);
        $langue->delete();
        return redirect()->route('langues.index')
                        ->with('success', 'Langue supprimée avec succès');
    }
    
}
