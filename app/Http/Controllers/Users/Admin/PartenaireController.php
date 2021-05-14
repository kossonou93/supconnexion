<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Partenaire;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        return view('admin.home', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partenaire.add');
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
            'photo' => 'required',
        ]);

        if ($request->file('photo')) {
            $partenaireImage = $request->file('photo');
            $partenaireName  = date('d-m-Y') . '.' . uniqid() . '.' . $partenaireImage->getClientOriginalName();
            $partenairePath  = public_path('uploads/photo/partenaire');
            $partenaireImage->move($partenairePath, $partenaireName);
        }

        $partenaire = new Partenaire();
        $partenaire->titre = $request->titre;
        $partenaire->photo = $partenaireName;
        $partenaire->texte = $request->texte;
        $partenaire->soustitre = $request->soustitre;
        $partenaire->save();
        return redirect('admin/')->with('success', 'partenaire enregistré avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partenaire = Partenaire::find($id);
        return view('admin.partenaire.edit', compact('partenaire'));
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

        $partenaire = Partenaire::find($id);
        $partenaire->titre = $input['titre'];
        $partenaire->soustitre = $input['soustitre'];
        $partenaire->texte = $input['texte'];

        if ($request->file('photo')) {
            @unlink(public_path('uploads/photo/partenaire'.$partenaire->photo));
            $partenaireImage = $request->file('photo');
            $partenaireName  = date('d-m-Y') . '.' . uniqid() . '.' . $partenaireImage->getClientOriginalName();
            $partenairePath  = public_path('uploads/photo/partenaire');
            $partenaireImage->move($partenairePath, $partenaireName);
            $partenaire->photo = $partenaireName;
        }
  
        $partenaire->save();
  
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
        $partenaire = Partenaire::find($id);
        @unlink(public_path('uploads/photo/partenaire' . $partenaire->photo));
        $partenaire->delete();
        $notification = array(
            'message'    => 'Image partenaire supprimée avec succès',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.dashboard')
                        ->with($notification);
    }
}
