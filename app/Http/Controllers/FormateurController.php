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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list(Request $request)
    {
        $formateur=Formateur::with('service','pieces')->get();
        
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

     $idpieces = $request->input('pieces');
        $piece = Piece::find($idpieces); 
        $pieces= Piece::get(); 
      
        
        return view ('formateurs.create', compact('diplomes','service','specialites','pieces'));
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

       /*  if ($request->hasFile('fichier')){
            $path=$request->file('fichier')->store('folderfile');
            $fileinfo=$request->file('fichier');
            $request->merge([
                'fichier'=> $path,
                'fichier'=> $fileinfo->getClientOriginalName(),
            ]);
        } */

        $idservices = $request->input('service');
        $service = Service::find($idservices);
       /*  $idpieces = $request->input('pieces');
        $piece = Piece::find($idpieces); */

      
        
        $formateur = new Formateur();

            $formateur->nom = $request->get('nom');
            $formateur->prenom = $request->get('prenom');
            $formateur->adresse = $request->get('adresse');
            $formateur->date_naissance = $request->get('date_naissance');
            $formateur->lieu_naissance = $request->get('lieu_naissance');
            $formateur->cni = $request->get('cni');
            $formateur->diplomes = $request->get('diplomes');
            $formateur->specialite = $request->get('specialite'); 
            $formateur->matricule = $request->get('matricule');
            $formateur->telephone = $request->get('telephone');
            $formateur->type_formation = $request->get('type_formation');
            $formateur->email = $request->get('email');
            
            
           // $formateur->services_idservices = $request->get('services_idservices');
          $service->nom = $request->get('nom');
       /*    $piece->nom = $request->get('nom');
          $piece->fichier = $request->get('fichier'); */
     
      $service->formateurs()->save($formateur);
    /*  Formateur::create($request->all()); */
   

         // $formateur->save(); 
        return redirect('/formateurs')->with('success', 'formateur Enregistré!');
        
    }
    public function exporterPDF(Request $request)
    {
      
      
        $data = Formateur::find($request->idformateurs);
        $data=array('formateur'=>$data);

        if($request->has('download')){
            $html = view($request->view,$data)->render();
            $snappy=\App::make('snappy.pdf');
            
            return response(
                $snappy->getOutputFromHtml($html), 200,
            array(
                'Content-Type'=>'application/pdf',
                'Content-Disposition'=>'attachment;filename="ficheformateur'.$request->printpdf.'.pdf"',
            )
            );
        }
        return view ($request->printpdf,$data);
        
       
     
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formateur $formateur)
    {

       
       
       $service= Service::get(); 
        $specialites= Specialite::get(); 
        $pieces= Piece::get(); 
        return view('formateurs.affichage', compact('service', 'formateur','pieces','specialite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Formateur  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request  $request,$idformateurs)
    {
      
        $idservices = $request->input('service');
        $service = Service::find($idservices);
     
        $service = Service::get();

        $formateur = Formateur::find($idformateurs);

 
         return view('formateurs.edit')->with(compact('formateur','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idformateurs
     * @return \Illuminate\Http\Response
     */
   /*  public function update(Request $request, Formateur $formateur) */
    public function update(Request $request, $idformateurs)
    {
     /*    $formateur->update($request->all());
        
        return redirect ('/formateurs')->with('success', ' Formateur Modifié!');; */

  $request->validate([
            'nom'=>'required',
           
        ]);
        $idservices = $request->input('service');
        $service = Service::find($idservices);
        $formateur = Formateur::find($idformateurs);
        $formateur->nom =  $request->get('nom');
        $formateur->prenom = $request->get('prenom');
        $formateur->adresse = $request->get('adresse');
        $formateur->date_naissance=  $request->get('date_naissance');
        $formateur->lieu_naissance =  $request->get('lieu_naissance');
        $formateur->cni =  $request->get('cni');
        $formateur->diplomes =  $request->get('diplomes');
        $formateur->specialite =  $request->get('specialite');
        $formateur->service->nom  =  $request->get('service');
        $formateur->matricule =  $request->get('matricule');
        $formateur->telephone =  $request->get('telephone');
        $formateur->type_formation =  $request->get('type_formation');
        $formateur->email =  $request->get('email');
       /*  $formateur->save(); */
        $service->formateurs()->save($formateur);
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
  /*   public function orderPdf($idformateurs)
 {
     $formateur= Formateur::findOrFail($idformateurs);
     $pdf = PDF::loadView('affichage', compact('formateur'));
     $name = "commandeNo-".$formateur->idformateurs.".pdf";
     return $pdf->download($name);
 }
  */
}
