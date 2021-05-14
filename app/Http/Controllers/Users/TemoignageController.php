<?php

namespace App\Http\Controllers\Users;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Temoignage;
use App\Intervenant;
use App\Http\Controllers\Controller;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('guest');
        //$this->middleware('guest:ecole');
        //$this->middleware('guest:intervenant');
        //$this->middleware('auth:ecole');
    }


    public function index()
    {
        $temoignages = Temoignage::all();
        return view('admin.temoignage.add', compact('temoignages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.temoignage.add');
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
            'texte' => 'required',
        ]);

        $temoignage = new Temoignage();
        $temoignage->texte = $request->texte;
        if (Auth::guard('intervenant')->check()) {
            $inter = Intervenant::find($request->user);
            $temoignage->intervenant_id = $inter;
        } else {
            $ecole = Ecole::find($request->user);
            $temoignage->ecole_id = $ecole;
        }
    
        //$temoignage->texte = $request->texte;
        $temoignage->save();
        return redirect()->route('intervenant.dashboard')->with('success', 'temoignage enregistré avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $temoignage = Temoignage::find($id);
        return view('admin.temoignage.edit', compact('temoignage'));
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

        $temoignage = Temoignage::find($id);
        $temoignage->texte = $input['texte'];
  
        $temoignage->save();
  
        return redirect()->route('admin.dashboard')
                        ->with('success','temoignage modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temoignage = Temoignage::find($id);
        $temoignage->delete();
        $notification = array(
            'message'    => 'Image temoignage supprimée avec succès',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.dashboard')
                        ->with($notification);
    }
}
