<?php

namespace App\Http\Controllers;
use App\Specialite;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class SpecialiteController extends Controller
{
    public function list(Request $request)
    {
        $specialites=Specialite::get();
        return Datatables::of($specialites)->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  return view('specialites.index'); */
       $specialites = \App\Specialite::all();

        return view ('specialites.index', compact('specialites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('specialites.create'); 
    /*     $specialites= Specialite::get();
        return view ('specialites.create',compact('specialites')); */
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
            'nom'=>'required',
            
        ]);

        $specialite = new Specialite([
            'nom' => $request->get('nom'),
        'formateurs_idformateurs' => $request->get('formateurs_idformateurs'),
           
        ]);
        $specialite->save();
        return redirect('/specialites')->with('success', 'Specialité Enregistrée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $idspecialites
     * @return \Illuminate\Http\Response
     */
    public function edit( $idspecialites)
    {
        $specialite = Specialite::find($idspecialites);

        /*  $message = 'modifier'.$piece->nom.'Edition effectuée'; */
 
         return view('specialites.edit')->with(compact('specialite'));
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $idspecialites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idspecialites)
    {
        $request->validate([
            'nom'=>'required',
           
        ]);

        $specialite = Specialite::find($idspecialites);
        $specialite->nom =  $request->get('nom');
       $specialite->formateurs_idformateurs = $request->get('formateurs_idformateurs');
        
        $specialite->save();

        return redirect('/specialites')->with('success', 'Spécialité Modifiée!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $idspecialites
     * @return \Illuminate\Http\Response
     */
    public function destroy($idspecialites)
    {
        $specialite = Specialite::find($idspecialites);
        $specialite->delete();

        return redirect('/specialites')->with('success', 'Specialité Supprimée!');
    }
  
}
