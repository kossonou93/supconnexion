<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Academique;

class AcademiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academiques = Academique::all();
        return view('admin.academique.all', compact('academiques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.academique.add');
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
            $academiqueImage = $request->file('photo');
            $academiqueName  = date('d-m-Y') . '.' . uniqid() . '.' . $academiqueImage->getClientOriginalName();
            $academiquePath  = public_path('uploads/photo/academique');
            $academiqueImage->move($academiquePath, $academiqueName);
        }

        $academique = new Academique();
        $academique->titre = $request->titre;
        $academique->auteur = $request->auteur;
        $academique->date_pub = $request->date_pub;
        $academique->photo = $actualiteName;
        $academique->texte = $request->texte;
        $academique->soustitre = $request->soustitre;
        $academique->save();
        return redirect('projet_academiques/')->with('success', 'projet academique enregistré avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academique = Academique::find($id);
        return view('admin.academique.edit', compact('academique'));
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

        $academique = Academique::find($id);
        $academique->titre = $input['titre'];
        $academique->auteur = $input['auteur'];
        $academique->date_pub = $input['date_pub'];
        $academique->soustitre = $input['soustitre'];
        $academique->texte = $input['texte'];

        if ($request->file('photo')) {
            @unlink(public_path('uploads/photo/academique/'.$academique->photo));
            $academiqueImage = $request->file('photo');
            $academiqueName  = date('d-m-Y') . '.' . uniqid() . '.' . $academiqueImage->getClientOriginalName();
            $academiquePath  = public_path('uploads/photo/academique');
            $academiqueImage->move($academiquePath, $partenaireName);
            $academique->photo = $academiqueName;
        }
  
        $actualite->save();
  
        return redirect()->route('admin.dashboard')
                        ->with('success','projet academique modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academique = Academique::find($id);
        @unlink(public_path('uploads/photo/academique/' . $academique->photo));
        $academique->delete();
        $notification = array(
            'message'    => 'Image projet academique supprimée avec succès',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.dashboard')
                        ->with($notification);
    }
}
