<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actualite;
use Illuminate\Support\Facades\Validator;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $actualites = Actualite::all();
        return view('admin.actualite.all', compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actualite.add');
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

        if ($request->file('photo')) {
            $actualiteImage = $request->file('photo');
            $actualiteName  = date('d-m-Y') . '.' . uniqid() . '.' . $actualiteImage->getClientOriginalName();
            $actualitePath  = public_path('uploads/photo/actualite');
            $actualiteImage->move($actualitePath, $actualiteName);
        }

        $actualite = new Actualite();
        $actualite->titre = $request->titre;
        $actualite->auteur = $request->auteur;
        $actualite->date_pub = $request->date_pub;
        $actualite->photo = $actualiteName;
        $actualite->texte = $request->texte;
        $actualite->soustitre = $request->soustitre;
        $actualite->save();
        return redirect('admin/')->with('success', 'actualite enregistrée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actualite = Actualite::find($id);
        return view('admin.actualite.edit', compact('actualite'));
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
            'titre' => 'required',
        ]);

        $actualite = Actualite::find($id);
        $actualite->titre = $input['titre'];
        $actualite->auteur = $input['auteur'];
        $actualite->date_pub = $input['date_pub'];
        $actualite->soustitre = $input['soustitre'];
        $actualite->texte = $input['texte'];

        if ($request->file('photo')) {
            @unlink(public_path('uploads/photo/actualite/'.$actualite->photo));
            $actualiteImage = $request->file('photo');
            $actualiteName  = date('d-m-Y') . '.' . uniqid() . '.' . $actualiteImage->getClientOriginalName();
            $actualitePath  = public_path('uploads/photo/actualite');
            $actualiteImage->move($actualitePath, $partenaireName);
            $actualite->photo = $actualiteName;
        }
  
        $actualite->save();
  
        return redirect()->route('admin.dashboard')
                        ->with('success','partenaire modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actualite = Actualite::find($id);
        @unlink(public_path('uploads/photo/actualite/' . $actualite->photo));
        $actualite->delete();
        $notification = array(
            'message'    => 'Image actualite supprimée avec succès',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.dashboard')
                        ->with($notification);
    }
}
