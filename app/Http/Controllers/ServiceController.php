<?php

namespace App\Http\Controllers;
use App\Service;
use App\Formateur;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function list(Request $request)
    {
        
        
        $services=Service::with('formateurs')->get();
        return Datatables::of($services)->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* return view('services.index'); */
        $services = Service::all();

        return view ('services.index', compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        $services= Service::get();
        return view ('services.create',compact('services'));
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
            'adresse'=>'required',
            'telephone'=>'required',
            
        ]);

        $service = new service([
            'nom' => $request->get('nom'),
            'adresse' => $request->get('adresse'),
            'telephone' => $request->get('telephone'),
        ]);
        $service->save();
        return redirect('/services')->with('success', 'Service Enregistrée!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $service->formateurs= Service::with('formateurs')->get();


       
       return view('services.affichage', compact('service'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $idservices
     * @return \Illuminate\Http\Response
     */
    public function edit($idservices)
    {
        $service = Service::find($idservices);
        $formateurs= Formateur::get();
        /*  $message = 'modifier'.$piece->nom.'Edition effectuée'; */
 
         return view('services.edit')->with(compact('service','formateurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idservices)
    {
        $request->validate([
            'nom'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
           
        ]);

        $service = Service::find($idservices);
   
        $service->nom =  $request->get('nom');
        $service->adresse = $request->get('adresse');
        $service->telephone = $request->get('telephone');
        
        $service->save();

        return redirect('/services')->with('success', ' Service Edité!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($idservices)
    {
        $service = Service::find($idservices);
        $service->delete();

        return redirect('/services')->with('success', 'Service Supprimé!');
    }
}