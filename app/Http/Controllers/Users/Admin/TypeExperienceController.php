<?php

namespace App\Http\Controllers\Users\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeExperience;

class TypeExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texperiences = TypeExperience::all();
        return view('admin.typeexperience.all', compact('texperiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeexperience.add');
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
        $texperience = new TypeExperience([
            'type' => $request->get('type')
        ]);
        $texperience->save();
        return redirect('admin/typeexperiences')->with('success', 'Type d Experience enregistré avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $texperience = TypeExperience::find($id);
        return view('admin.typeexperience.edit', compact('texperience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$texperienc = Discipline::find($id);
        //return view('admin.texperience.all', compact('texperienc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeExperience $texperience)
    {
        $request->validate([
            'type' => 'required',
        ]);
  
        $texperience->update($request->all());
  
        return redirect()->route('typeexperience.index')
                        ->with('success','Type d Expérience modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $texperience = TypeExperience::findOrFail($id);
        $texperience->delete();
        return redirect()->route('typeexperience.index')
                        ->with('success', 'Type d Expérience supprimé avec succès');
    }
}
