<?php

namespace App\Http\Controllers;
use App\Formateur;
use App\Diplome;
use App\Service;
use App\Piece;
use App\Specialite;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use PDF;
use DB;

class FormateurController extends Controller
{
    public function list(Request $request)
    {
        $formateur=Formateur::with('service','specialites')->get();
        return Datatables::of($formateur)->make(true);
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
    public function create(Request $request)
    {
        $idservices = $request->input('service');
        $service = Service::find($idservices);

       $idspecialites = $request->input('specialites');
        $specialite = Specialite::find($idspecialites); 
        $specialites= Specialite::get();

        $iddiplomes = $request->input('diplomes');
        $diplome = Diplome::find($iddiplomes);
        $diplomes= Diplome::get();
      
        
        return view ('formateurs.create', compact('diplomes','service','specialites'));
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
		'matricule'=>'required', 
		
            
        ]);

        $idservices = $request->input('service');
        $service = Service::find($idservices);
        
        $formateur = new Formateur();

            $formateur->nom = $request->get('nom');
            $formateur->prenom = $request->get('prenom');
            $formateur->date_naissance = $request->get('date_naissance');
            $formateur->lieu_naissance = $request->get('lieu_naissance');
            $formateur->cni = $request->get('cni');
            $formateur->diplomes = $request->get('diplomes');
            /* $formateur->niveaux = $request->get('niveaux'); */
            $formateur->matricule = $request->get('matricule');
            $formateur->telephone = $request->get('telephone');
           // $formateur->services_idservices = $request->get('services_idservices');
           $service->nom = $request->get('nom');
         
          
           
         
    /*  $specialite=Specialite::find($request->get('nom'));  */
     
      $service->formateurs()->save($formateur); 
         // $formateur->save(); 
        return redirect('/formateurs')->with('success', 'formateur Enregistré!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formateur $formateur )
    {
        $specialites= Specialite::get(); 
        $pieces= Piece::get(); 
        return view('formateurs.affichage', compact('formateur','pieces','specialites'));
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

        return redirect('/formateurs')->with('success', ' Formateur Modifié!');


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
   /*  public function pdfview(Request $request)
    {
    
        $formateur = DB::table("formateurs")->get();
        view()->share('formateurs',$formateur );
 
        if($request->has('download')) {
        	
            $pdf = PDF::loadView('pdfview');
            
            return $pdf->download('formateur.pdf');
        }
        return view('formateurs.affichage', compact('formateur','pieces','specialites'));
    } */
}
