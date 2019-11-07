    @extends('layout.default')
    @section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h3 class="card-title" style="color:blue;">Mise à jour des informations du Formateur</h3>
               <h3> Etablissement affecté : <strong> {{$formateur->service->nom ?? "Aucun service choisi" }}</strong> </h3>



                    <p class="card-category">
                        {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                        {{-- <a href="#" target="_blank">full documentation.</a> --}}
                        <p class="card-category">
                    
                            <a target="_blank" href="{{route('layout.default2')}}">Accueil</a>.ou consulter la
                             <a href="{{route('formateurs.index')}}" target="_blank">liste des formateurs</a> 
                        </p>
                    </p>
                </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br /> 
            @endif
            <div class="card-body">
                <div class="row pt-5"></div>
            <form method="post" action="{{ route('formateurs.update', $formateur->idformateurs) }}">
            
                @csrf
                @method('PUT') 
                <input type="hidden" name="service" value="{{$formateur->service->idservices}}" class="form-control" id="input" placeholder=""> 

                <div class="form-group col-md-4">

                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" value={{ $formateur->nom }} />
                </div>

                <div class="form-group col-md-4">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" value={{ $formateur->prenom}} />
                </div> 
                <div class="form-group col-md-4">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" name="adresse" value={{ $formateur->adresse}} />
                    </div> 
            <div class="form-group col-md-4">
                    <label for="date_naissance">Date de naissance</label>
                    <input type="date" class="form-control" name="date_naissance" value={{ $formateur->date_naissance}} />
                </div> 
                <div class="form-group col-md-4">
                    <label for="lieu_naissance">Lieu de naissance</label>
                    <input type="text" class="form-control" name="lieu_naissance" value={{ $formateur->lieu_naissance}} />
                </div> 
                <div class="form-group col-md-4">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" value={{ $formateur->email}} />
                    </div>  
                <div class="form-group col-md-4">
                    <label for="cni">CNI</label>
                    <input type="int" class="form-control" name="cni" value={{$formateur->cni}} />
                </div>  
                                
       <div class="form-group col-md-4">
                        
          <label for="exampleInputservice">Etablissements</label>
                <select  name="service" class="form-control" id="exampleInputservice" >                        
                    
                    @foreach($service as $service)
                        <option value="{{$service->idservices}}">{{$service->nom}}</option>{{ $service->nom }}
                    @endforeach
                </select>
                
                <small id="exampleInputservice" class="form-text text-muted">
                    @if ($errors->has('service'))
                    @foreach ($errors->get('service') as $message)
                    <p class="text-danger">{{ $message }}</p>
                    @endforeach
                    @endif
                </small>
            </div>  

               {{-- <div class="form-group col-md-4">
                        <label for="services_idservices">Service2</label>
                        <input type="text" class="form-control" name="services_idservices" value=  {{$formateur->service->nom}} />
                    </div>  --}} 
              

             


            {{-- <div class="form-group col-md-4">
                    <label for="service">services</label>
                    <input type="text" class="form-control" name="service"  value={{$formateur->service->nom}} />
                </div>   --}}
                <div class="form-group col-md-4">
                    <label for="diplomes">Diplomes</label>
                    <input type="text" class="form-control" name="diplomes" value={{$formateur->diplomes}} />
                </div>  
                <div class="form-group col-md-4">
                    <label for="matricule">Matricule</label>
                    <input type="int" class="form-control" name="matricule" value={{$formateur->matricule}} />
                </div> 
                <div class="form-group col-md-4">
                    <label for="specialite">Spécialité</label>
                    <input type="text" class="form-control" name="specialite" value={{$formateur->specialite}} />
                </div> 
                <div class="form-group col-md-4">
                    <label for="telephone">Téléphone</label>
                    <input type="int" class="form-control" name="telephone" value={{ $formateur->telephone}} />
                </div>          
                <div class="form-group col-md-4">
                    <label for="type_formation">Type de formation</label>
                  {{--   <input type="text" class="form-control" name="type_formation" value={{ $formateur->type_formation}} /> --}}
                    <select  name="type_formation" class="form-control" id="input-nom-help"  value={{ $formateur->type_formation}}>                        
                    
                                
                        <option value="Diplomante">Diplomante</option>
                        <option value="Continue">Continue</option>
               
                </select>
                </div>          
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-secondary"  onclick="history.back()" >Annuler</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    @endsection