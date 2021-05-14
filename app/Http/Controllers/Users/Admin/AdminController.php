<?php

namespace App\Http\Controllers\Users\Admin;
use App\Discipline;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Partenaire;
use App\Intervenant;
//use Illuminate\Support\Facades\Validator;
use Validator,Redirect,Response;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $carousels = Carousel::all();
        $partenaires = Partenaire::all();
        return view('admin.home', compact('carousels', 'partenaires'));
    }

    public function form()
    {
        return view('form');
    }

    public function addDiscipline()
    {
        return view('admin.discipline.add');
    }

    public function addDisciplines(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
        ]);

        Discipline::create($input);

        return back()->with('success','discipline ajoutée avec succès');
        //return view('admin.discipline.add');
    }

    public function allDiscipline()
    {
        $disciplines = Discipline::all();
        return view('admin.discipline.all', compact('disciplines'));

        /*if(request()->ajax()) {
            return datatables()->of(Discipline::select([
                'id' , 'name'
            ]))
            ->addIndexColumn()
            ->addColumn('action', function($data){
                   
                   $editUrl = url('admin/discipline/edit/'.$data->id);
                   $btn = '<a href="'.$editUrl.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm">Edit</a>';

                   $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteDiscipline">Delete</a>';

                    return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.discipline.all');
        */
    }
    

    public function editDiscipline(Request $request, $id)
    {
        $disciplines = Discipline::all();
        $data['discipline'] = Discipline::where('id', $id)->first();
        if (!$data['discipline']) {
            return view('admin.discipline.all', compact('disciplines'));
        }
        return view('admin.discipline.all', compact('disciplines'), $data);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    public function updateDiscipline(Request $request, Discipline $discipline)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        $discipline->update($request->all());

        return redirect()->route('admin.discipline.all')
                        ->with('success','Product updated successfully');
        
        //return view('admin.discipline.all', compact('disciplines'));
    }

    public function destroy($id){

        DB::table('disciplines')->where('id', $id)->delete();
        //session()->flash('message', 'Directeur(trice) supprimé(e) avec succès!');
        return redirect()->route('admin.all.discipline');
  
  }

  public function allIntervenants()
    {
        $intervenants = Intervenant::all();
        return view('admin.intervenant.all', compact('intervenants'));
    }
}