@extends('layout.default')
@section('content')


<div class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header card-header-primary">
              <h3 class="card-title">Enregistrer une piece</h3>
              <p class="card-category">
                  {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                  {{-- <a href="#" target="_blank">full documentation.</a> --}}
              </p>
          </div>
          <div class="card-body">
              <div class="row pt-5"></div>
              
              <form method="POST" action="{{route('pieces.store')}}">
            
                  {{ csrf_field() }}
                  <div class="form-group col-md-4">
                        <label for="exampleInputnom">Piéces</label>
         {{-- <input type="text" name="services" class="form-control" id="exampleInputservices" aria-describedby="servicesHelp" placeholder="Enter le nom du service"> --}}
       
                    
                    <select id="exampleInputnom" name="nom"  class="form-control">
                      <option value="Certificat de domicile">Certificat de domicile</option>
                      <option>cni</option>
                      <option>ATTESTATION</option>
                      
                    </select>
                  {{--   <small id="servicesHelp" class="form-text text-muted">
                            @if ($errors->has('services'))
                            @foreach ($errors->get('services') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>  --}}
                    
                  </div>
                  <div class="form-group col-md-4">
                    <label for="input-nom">id_formateurs</label>
                    <input type="int" name="formateurs_idformateurs" class="form-control" id="input-formateurs_idformateurs" aria-describedby="formateurs_idformateursHelp" placeholder="id du formateur">
                    <small id="input-formateurs_idformateurs-help" class="form-text text-muted">
                        @if ($errors->has('formateurs_idformateurs'))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->get('formateurs_idformateurs') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </small>
                </div> 
                
                  <div class="form-check">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          Option one is this
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                      </label>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
              </form>
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