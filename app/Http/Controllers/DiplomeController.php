<?php

namespace App\Http\Controllers;
use App\Diplome;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DiplomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(Request $request)
    {
        $diplomes=Diplome::get();
        return Datatables::of($diplomes)->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    /* return view ('diplomes.index'); */
    $diplomes = Diplome::all();

    return view('diplomes.index', compact('diplomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /*  $diplomes = Branch::pluck('name'); */
       $diplomes= Diplome::get();
        return view ('diplomes.create',compact('diplomes'));
        
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

        $diplome = new Diplome([
            'nom' => $request->get('nom'),
        /* 'formateurs_idformateurs' => $request->get('formateurs_idformateurs'), */
           
        ]);
        $diplome->save();
        return redirect('/diplomes')->with('success', 'Diplome Enregistré!');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('diplomes.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $iddiplomes
     * @return \Illuminate\Http\Response
     */
    public function edit($iddiplomes)
    {
        $diplome = Diplome::find($iddiplomes);

       /*  $message = 'modifier'.$piece->nom.'Edition effectuée'; */

        return view('diplomes.edit')->with(compact('diplome'));

     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diplome  $diplomes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $iddiplomes)
    {
        $request->validate([
            'nom'=>'required',
           
        ]);

        $diplome = Diplome::find($iddiplomes);
        $diplome->nom =  $request->get('nom');
        /* $diplome->formateurs_idformateurs = $request->get('formateurs_idformateurs'); */
        
        $diplome->save();

        return redirect('/diplomes')->with('success', 'Diplome Modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int  $iddiplomes
     * @return \Illuminate\Http\Response
     */
    public function destroy($iddiplomes)
    {
      /*   $diplomes->delete();
        $message = "suppression" .$diplomes->nom. 'effectuer avec succes';
        return redirect()->route('diplomes.index')->with(compact('message')); */


        $diplome = Diplome::find($iddiplomes);
        $diplome->delete();

        return redirect('/diplomes')->with('success', 'Diplome Supprimé');
    }
   

    
    
       
    
}
