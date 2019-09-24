<?php

namespace App\Http\Controllers;
use App\Formateur;
use App\Diplome;
use App\Service;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class FormateurController extends Controller
{
    public function list(Request $request)
    {
        $formateurs=Formateur::with('diplomes','service')->get();
        return Datatables::of($formateurs)->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*   return view('formateurs.index'); */
      $formateurs = Formateur::all();

      return view('formateurs.index', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diplomes= Diplome::get();
        $services= Service::get();
        return view ('formateurs.create',compact('diplomes','service'));
       /*  return view('formateurs.create');   */
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
            
		'prenom'=>'required',
		'date_naissance'=>'required',
		'lieu_naissance'=>'required', 
		'cni'=>'required',
		
		/* 'niveaux'=>'required', */
		'matricule'=>'required',
		
            
        ]);

        $formateur = new Formateur([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'date_naissance' => $request->get('date_naissance'),
            'lieu_naissance' => $request->get('lieu_naissance'),
            'cni' => $request->get('cni'),
           /*  'services' => $request->get('services'),
            'diplomes' => $request->get('diplomes'), */
            'niveaux' => $request->get('niveaux'),
            'matricule' => $request->get('matricule'),
            'telephone' => $request->get('telephone'),
            'services_idservices' => $request->get('services_idservices'),
        ]);
        $formateur->save();
        return redirect('/formateurs')->with('success', 'formateur modifié!');
        
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
     * @param \App\Formateur  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idformateurs)
    {
        $formateur = Formateur::find($idformateurs);

        /*  $message = 'modifier'.$piece->nom.'Edition effectuée'; */
 
         return view('formateurs.edit')->with(compact('formateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idformateurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idformateurs)
    {
        $request->validate([
            'nom'=>'required',
           
        ]);

        $formateur = Formateur::find($idformateurs);
        $formateur->nom =  $request->get('nom');
        $formateur->prenom = $request->get('prenom');
        $formateur->date_naissance=  $request->get('date_naissance');
        $formateur->lieu_naissance =  $request->get('lieu_naissance');
        $formateur->cni =  $request->get('cni');
       
        $formateur->matricule =  $request->get('matricule');
        $formateur->telephone =  $request->get('telephone');
        
        $formateur->save();

        return redirect('/formateurs')->with('success', ' Formateur Enregistré!');


    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $idformateurs
     * @return \Illuminate\Http\Response
     */
    public function destroy($idformateurs)
    {
        $formateur = Formateur::find($idformateurs);
        $formateur->delete();

        return redirect('/formateurs')->with('success', 'formateur Supprimé!');
        
    }
}
