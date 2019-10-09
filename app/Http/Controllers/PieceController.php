<?php

namespace App\Http\Controllers;

use App\Piece;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class pieceController extends Controller
{
    public function list(Request $request)
    {
        $piece = Piece::get();

        return Datatables::of($piece)->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pieces = Piece::all();

        return view('pieces.index', compact('pieces'));
    }

    /**
     * Show the form for creating a new resource.
    
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         return view('pieces.create'); 
/*         $pieces= Piece::get();
        return view ('pieces.create',compact('pieces')); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            
        ]);

        $piece = new Piece([
            'nom' => $request->get('nom'),
       'formateurs_idformateurs' => $request->get('formateurs_idformateurs'),
           
        ]);
        $piece->save();
        return redirect('/pieces')->with('success', 'Piéce Enregistrée!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\piece $piece
     *
     * @return \Illuminate\Http\Response
     */
    public function show(piece $piece)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $idpieces
     *
     * @return \Illuminate\Http\Response
     */
    // public function edit(Piece $piece)
    public function edit($idpieces)
    {
        $piece = Piece::find($idpieces);

       /*  $message = 'modifier'.$piece->nom.'Edition effectuée'; */

        return view('pieces.edit')->with(compact('piece'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\piece      $piece
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idpieces)
    {
       /*  $piece->update($request->all());

      
        return view('pieces.index'); */
        $request->validate([
            'nom'=>'required',
           
        ]);

        $piece = Piece::find($idpieces);
        $piece->nom =  $request->get('nom');
      $piece->formateurs_idformateurs = $request->get('formateurs_idformateurs'); 
        
        $piece->save();

        return redirect('/pieces')->with('success', 'Piéce Modifiée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $idpieces
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $idpieces)
    {
   
        
        $piece = Piece::find($idpieces);
        $piece->delete();

        return redirect('/pieces')->with('success', 'Piéce Supprimée');
/* 
      $piece->delete();
        $message = "suppression" .$piece->nom. 'effectuer avec succes';
        return redirect()->route('pieces.index')->with(compact('message')); */
    
    }
 

}