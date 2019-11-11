<?php

namespace App\Http\Controllers;
use App\Piece;
use App\Formateur;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class pieceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list(Request $request)
    {
       /*  $piece = Piece::get(); */
      $piece = Piece::with('formateur')->get();
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
        /*  return view('pieces.create'); */ 
        
       $idformateurs = $request->input('formateur');
        $formateur = Formateur::find($idformateurs);
        $formateurs= Formateur::get(); 
         $piece= Piece::get();
         
         $idpieces= $request->input('pieces');
         $piece = Piece::find($idpieces);


     
         return view ('pieces.create',compact('pieces','formateur'));
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
        'nom' => 'required',
        'fichier' => 'required',
    ]);
    
    
 
    if ($request->hasFile('fichier')) {
        $path = $request->file('fichier')->store('folderfile');
        $fileinfo = $request->file('fichier');
        $request->merge([
            'fichier' => $path,
            'fichier' => $fileinfo->getClientOriginalName(),
        ]);
    } 
  
  $idformateurs = $request->input('formateur'); 

    $formateur = Formateur::find($idformateurs);
    
    $piece = new Piece();
    $piece->nom = $request->get('nom');
    $piece->fichier = $request->get('fichier');
   
    $formateur->pieces()->save($piece);

    /*  $piece->save();  */
     return redirect('/formateurs')->with('success', 'Piéce Enregistrée!');
     //return redirect()->route('pieces.index')->with('success', 'Piéce Enregistrée!');

     /*    return view ('formateurs.affichage'); */
     
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

        return view('pieces.edit')->with(compact('piece','formateur'));
      
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
        $piece->fichier =  $request->get('fichier');
      /* $piece->formateurs_idformateurs = $request->get('formateurs_idformateurs');  */
        
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