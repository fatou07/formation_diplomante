@extends('layout.default')
@section('content')


<div class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header card-header-primary">
              <h3 class="card-title">Enregistrer une nouvelle Specialité</h3>
              <p class="card-category">
                  {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                  {{-- <a href="#" target="_blank">full documentation.</a> --}}
              </p>
          </div>
          <div class="card-body">
              <div class="row pt-5"></div>
              
          <form method="POST" action="{{route('specialites.store')}}">
                  {{ csrf_field() }}
                 
                  <div class="form-group">
                      <label for="input-nom"></label>
                      <input type="text" name="nom" class="form-control" id="input-nom" aria-describedby="nomHelp" placeholder="Nom du specialité à ajouter">
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
                  <div class="form-group">
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