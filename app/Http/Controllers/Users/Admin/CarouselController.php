<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel;
use Illuminate\Support\Facades\Validator;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('admin.home', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousel.add');
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
            $carouselImage = $request->file('photo');
            $carouselName  = date('d-m-Y') . '.' . uniqid() . '.' . $carouselImage->getClientOriginalName();
            $carouselPath  = public_path('uploads/photo/carousel');
            $carouselImage->move($carouselPath, $carouselName);
        }

        $carousel = new carousel();
        $carousel->titre = $request->titre;
        $carousel->photo = $carouselName;
        $carousel->texte = $request->texte;
        $carousel->soustitre = $request->soustitre;
        $carousel->save();
        return redirect('admin/')->with('success', 'carousel enregistré avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carousel = Carousel::find($id);
        return view('admin.carousel.edit', compact('carousel'));
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

        $carousel = Carousel::find($id);
        $carousel->titre = $input['titre'];
        $carousel->soustitre = $input['soustitre'];
        $carousel->texte = $input['texte'];

        if ($request->file('photo')) {
            @unlink(public_path('uploads/photo/carousel'.$carousel->photo));
            $carouselImage = $request->file('photo');
            $carouselName  = date('d-m-Y') . '.' . uniqid() . '.' . $carouselImage->getClientOriginalName();
            $carouselPath  = public_path('uploads/photo/carousel');
            $carouselImage->move($carouselPath, $carouselName);
            $carousel->photo = $carouselName;
        }
  
        $carousel->save();
  
        return redirect()->route('admin.dashboard')
                        ->with('success','carousel modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Carousel::where('id', $id)->exists()) {
            $carousel = Carousel::find($id);
            $carousel->delete();
            @unlink(public_path('uploads/photo/carousel' . $carousel->photo));
    
            return redirect()->route('admin.dashboard')
            ->with('message', 'Image Carousel supprimée avec succès',);
          } else {
            return redirect()->route('admin.dashboard')
            ->with('message', 'Image Carousel non trouvée ');
          }

    }
}
