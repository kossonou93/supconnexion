<?php

namespace App\Http\Controllers\Users\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pays;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = Pays::all();
        return view('admin.pays.all', compact('pays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pays.add');
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

        if ($request->file('flag')) {
            $paysImage = $request->file('flag');
            $paysName  = date('d-m-Y') . '.' . uniqid() . '.' . $paysImage->getClientOriginalName();
            $paysPath  = public_path('uploads/photo/pays');
            $paysImage->move($paysPath, $paysName);
        }

        $pays = new Pays();
        $pays->name = $request->name;
        $pays->flag = $request->flag;
        $pays->code = $request->code;

        $pays->save();
        return redirect('admin/pays')->with('success', 'Pays enregistré avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pays = Pays::find($id);
        return view('admin.pays.edit', compact('pays'));
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

        $pays = Pays::find($id);
        $pays->name = $input['name'];
        $pays->code = $input['code'];

        if ($request->file('flag')) {
            @unlink(public_path('uploads/photo/pays'.$pays->flag));
            $paysImage = $request->file('flag');
            $paysName  = date('d-m-Y') . '.' . uniqid() . '.' . $paysImage->getClientOriginalName();
            $paysPath  = public_path('uploads/photo/pays');
            $paysImage->move($paysPath, $paysName);
            $pays->flag = $paysName;
        }

        $pays->save();
        return redirect()->route('admin.dashboard')->with('success','pays modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pays = Pays::find($id);
        @unlink(public_path('uploads/photo/pays' . $pays->flag));
        $pays->delete();
        $notification = array(
            'message'    => 'Pays supprimé avec succès',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.dashboard')
                        ->with($notification);
    }
}
