@extends('layout.default')
@section('content')


<div class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header card-header-primary">
              <h3 class="card-title" style="color:blue;"><strong>Enregistrement de l'Agent</strong> </h3>
             <h3> Vous avez choisi le service : <strong> {{$service->nom ?? "Aucun service choisi" }}</strong> </h3>
              <p class="card-category">
                  {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                  {{-- <a href="#" target="_blank">full documentation.</a> --}}
              </p>
          </div>
          <div class="card-body">
              <div class="row pt-5"></div>
              
              <form method="POST" action="{{route('formateurs.store')}}">
                  {{ csrf_field() }}
              <input type="hidden" name="service" value="{{$service->idservices}}" class="form-control" id="input" placeholder=""> 
         {{-- <input type="hidden" name="specialite" value="{{$specialite->idspecialites}}" class="form-control" id="input" placeholder="">  --}}
   
              
              <form>
                    <div class="form-row">
                      
                            <div class="form-group col-md-4">
                                    <label for="input-prenom">Prenom </label>
                                    <input type="text" name="prenom" class="form-control" id="input-prenom" aria-describedby="prenomHelp" placeholder="">
                                  <small id="input-prenom-help" class="form-text text-muted">
                                      @if ($errors->has('prenom'))
                                      <div class="alert alert-danger">
                                          <ul>
                                              @foreach ($errors->get('prenom') as $message)
                                              <li>{{ $message }}</li>
                                              @endforeach
                                          </ul>
                                      </div>
                                      @endif
                                  </small>
                                  </div>
                      <div class="form-group col-md-4">
                        <label for="input-nom">Nom</label>
                        <input type="text" name="nom" class="form-control" id="input-nom" aria-describedby="nomHelp" placeholder="">
                        <small id="input-nom-help" class="form-text text-muted">
                            @if ($errors->has('nom'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->get('nom') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </small>
                      </div>
                      <div class="form-group col-md-4">
                            <label for="input-adresse">Adresse </label>
                            <input type="text" name="adresse" class="form-control" id="input-adresse" aria-describedby="adresseHelp" placeholder="">
                          <small id="input-adresse-help" class="form-text text-muted">
                              @if ($errors->has('adresse'))
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->get('adresse') as $message)
                                      <li>{{ $message }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                              @endif
                          </small>
                          </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputdate_naissance">Date de naissance</label>
                    <input type="date" name="date_naissance" class="form-control" id="exampleInputdate_naissance" aria-describedby="date_naissanceHelp" placeholder="">
                    <small id="date_naissanceHelp" class="form-text text-muted">
                        @if ($errors->has('date_naissance'))
                        @foreach ($errors->get('date_naissance') as $message)
                        <p class="text-danger">{{ $message }}</p>
                        @endforeach
                        @endif
                    </small>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputlieu_naissance">Lieu de naissance</label>
                            <input type="text" name="lieu_naissance" class="form-control" id="exampleInputlieu_naissance" aria-describedby="lieu_naissanceHelp" placeholder="">
                            <small id="lieu_naissanceHelp" class="form-text text-muted">
                                @if ($errors->has('lieu_naissance'))
                                @foreach ($errors->get('lieu_naissance') as $message)
                                <p class="text-danger">{{ $message }}</p>
                                @endforeach
                                @endif
                            </small>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="exampleInputtelephone">E-mail</label>
                                <input type="text" name="email" class="form-control" id="exampleInputtelephone" aria-describedby="telephoneHelp" placeholder="">
                                <small id="telephoneHelp" class="form-text text-muted">
                                    @if ($errors->has('email'))
                                    @foreach ($errors->get('email') as $message)
                                    <p class="text-danger">{{ $message }}</p>
                                    @endforeach
                                    @endif
                                </small>
                            </div>
                      </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputcni">Numéro CNI</label>
                        <input type="number" name="cni" class="form-control" id="exampleInputcni" aria-describedby="cniHelp" placeholder="">
                        <small id="cniHelp" class="form-text text-muted">
                            @if ($errors->has('cni'))
                            @foreach ($errors->get('cni') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                      </div>
                      <div class="form-group col-md-4">
                            <label for="exampleInputnom">Spécialités</label>

                           <input type="text" name ="specialite" class="form-control" id="exampleInputnom" aria-describedby="nomHelp" placeholder="">
                            
                            <small id="input-nom-help" class="form-text text-muted">
                                    @if ($errors->has('specialite'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('specialite') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                      
                             </div>  
                             <div class="form-group col-md-4">
                                <label for="exampleInputnom">Type de formation</label>
    
                               {{-- <input type="text" name ="type_formation" class="form-control" id="exampleInputnom" aria-describedby="nomHelp" placeholder="Enter type de formation"> --}}
                               <select  name="type_formation" class="form-control" id="input-nom-help" >                        
                    
                                
                                    <option value="Diplomante">Diplomante</option>
                                    <option value="Continue">Continue</option>
                           
                            </select>
                                <small id="input-nom-help" class="form-text text-muted">
                                        @if ($errors->has('type_formation'))
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->get('type_formation') as $message)
                                                <li>{{ $message }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </small>
                          
                                 </div>  




                     
                     <div class="form-group col-md-4">
                            <label for="exampleInputnom">Diplomes</label>
                            <input type="text" name="diplomes" class="form-control" id="exampleInputdiplome" aria-describedby="nomHelp" placeholder="">
            
                            <small id="input-nom-help" class="form-text text-muted">
                                    @if ($errors->has('diplomes'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('diplomes') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                      
                             </div> 
                     {{--  <div class="form-group col-md-2">
                      <label for="exampleInputniveaux">niveaux</label>
                        <input type="text" name="niveaux" class="form-control" id="exampleInputniveaux" aria-describedby="niveauxHelp" placeholder="Enter adresse">
                        <small id="niveauxHelp" class="form-text text-muted">
                            @if ($errors->has('niveaux'))
                            @foreach ($errors->get('niveaux') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                      </div> --}}
                      <div class="form-group col-md-2">
                      <label for="exampleInputMatricule">Matricule</label>
                      <input type="text" name="matricule" class="form-control" id="exampleInputMatricule" aria-describedby="MatriculeHelp" placeholder="">
                      <small id="MatriculeHelp" class="form-text text-muted">
                          @if ($errors->has('matricule'))
                          @foreach ($errors->get('matricule') as $message)
                          <p class="text-danger">{{ $message }}</p>
                          @endforeach
                          @endif
                      </small>
                    </div>
                    
                    <div class="form-group col-md-2">
                    <label for="exampleInputtelephone">Téléphone</label>
                    <input type="int" name="telephone" class="form-control" id="exampleInputtelephone" aria-describedby="telephoneHelp" placeholder="">
                    <small id="telephoneHelp" class="form-text text-muted">
                        @if ($errors->has('telephone'))
                        @foreach ($errors->get('telephone') as $message)
                        <p class="text-danger">{{ $message }}</p>
                        @endforeach
                        @endif
                    </small>
                </div>
               
       
              {{--   <div class="form-group col-md-2">
                        <label for="exampleInputservices_idservices">services_idservices</label>
                        <input type="int" name="services_idservices" class="form-control" id="exampleInputservices_idservices" aria-describedby="services_idservicesHelp" placeholder="Enter id services">
                        <small id="services_idservicesHelp" class="form-text text-muted">
                            @if ($errors->has('services_idservices'))
                            @foreach ($errors->get('services_idservices') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div> --}}
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    
                {{--     <button type="button" class="btn btn-danger" action="">Annuler</button> --}}
              
                  </form>
                 
      
                 {{--  <div class="form-check">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          Option one is this
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                      </label>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
              </form> --}}
              <div class="row justify-content-center">
                  @if ($errors->any())
                
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
              </div>
          </div>
      </div>
  </div>
</div>


@endsection