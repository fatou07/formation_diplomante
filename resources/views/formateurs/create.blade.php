@extends('layout.default')
@section('content')


<div class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header card-header-primary">
              <h3 class="card-title">Enregistrer une demande</h3>
              <p class="card-category">
                  {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                  {{-- <a href="#" target="_blank">full documentation.</a> --}}
              </p>
          </div>
          <div class="card-body">
              <div class="row pt-5"></div>
              
              <form method="POST" action="{{route('formateurs.store')}}">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label for="input-nom">Nom</label>
                      <input type="text" name="nom" class="form-control" id="input-nom" aria-describedby="emailHelp" placeholder="Nom du formateur">
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
                      <label for="input-prenom">prenom</label>
                      <input type="text" name="prenom" class="form-control" id="input-prenom" aria-describedby="prenomHelp" placeholder="prenom du formateur">
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
                  {{-- <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">
                          @if ($errors->has('email'))
                          @foreach ($errors->get('email') as $message)
                          <p class="text-danger">{{ $message }}</p>
                          @endforeach
                          @endif
                      </small>
                  </div> --}}
                  <div class="form-group">
                    <label for="exampleInputadresse">adresse</label>
                    <input type="text" name="adresse" class="form-control" id="exampleInputadresse" aria-describedby="adresseHelp" placeholder="Enter adresse">
                    <small id="adresseHelp" class="form-text text-muted">
                        @if ($errors->has('adresse'))
                        @foreach ($errors->get('adresse') as $message)
                        <p class="text-danger">{{ $message }}</p>
                        @endforeach
                        @endif
                    </small>
                </div>
                <div class="form-group">
                  <label for="exampleInputtelephone">telephone</label>
                  <input type="number" name="phone" class="form-control" id="exampleInputtelephone" aria-describedby="telephoneHelp" placeholder="Enter le numero">
                  <small id="telephoneHelp" class="form-text text-muted">
                      @if ($errors->has('telephone'))
                      @foreach ($errors->get('telephone') as $message)
                      <p class="text-danger">{{ $message }}</p>
                      @endforeach
                      @endif
                  </small>
              </div>
              <div class="form-group">
                <label for="exampleInputdate">date de naissance</label>
                <input type="date" name="date" class="form-control" id="exampleInputdate" aria-describedby="emailHelp" placeholder="date de naissance">
                <small id="dateHelp" class="form-text text-muted">
                    @if ($errors->has('date_naissance'))
                    @foreach ($errors->get('date_naissance') as $message)
                    <p class="text-danger">{{ $message }}</p>
                    @endforeach
                    @endif
                </small>
            </div>
            <div class="form-group">
              <label for="exampleInputlieu">lieu de naissance</label>
              <input type="text" name="lieu" class="form-control" id="exampleInputlieu" aria-describedby="lieuHelp" placeholder="lieu de naissance">
              <small id="lieuHelp" class="form-text text-muted">
                  @if ($errors->has('lieu_naissance'))
                  @foreach ($errors->get('lieu_naissance') as $message)
                  <p class="text-danger">{{ $message }}</p>
                  @endforeach
                  @endif
              </small>
          </div>
            <div class="form-group">
              <label for="exampleInputcni">numero CNI</label>
              <input type="number" name="cni" class="form-control" id="exampleInputcni" aria-describedby="cniHelp" placeholder="Enter cni">
              <small id="cniHelp" class="form-text text-muted">
                  @if ($errors->has('cni'))
                  @foreach ($errors->get('cni') as $message)
                  <p class="text-danger">{{ $message }}</p>
                  @endforeach
                  @endif
              </small>
          </div>
          <div class="form-group">
            <label for="exampleInputdiplome">Diplomes</label>
            <input type="text" name="diplomes" class="form-control" id="exampleInputdiplome" aria-describedby="diplomeHelp" placeholder="Enter nom diplome">
            <small id="diplomeHelp" class="form-text text-muted">
                @if ($errors->has('diplomes'))
                @foreach ($errors->get('diplome') as $message)
                <p class="text-danger">{{ $message }}</p>
                @endforeach
                @endif
            </small>
        </div>
          <div class="form-group">
            <label for="exampleInputService">Services</label>
            <input type="text" name="services" class="form-control" id="exampleInputService" aria-describedby="ServiceHelp" placeholder="Enter le nom du service">
            <small id="ServiceHelp" class="form-text text-muted">
                @if ($errors->has('services'))
                @foreach ($errors->get('services') as $message)
                <p class="text-danger">{{ $message }}</p>
                @endforeach
                @endif
            </small>
        </div>
        <div class="form-group">
          <label for="exampleInputSpecialite">Specialites</label>
          <input type="text" name="specialites" class="form-control" id="exampleInputSpecialite" aria-describedby="SpecialiteHelp" placeholder="Enter le nom de Specialite">
          <small id="SpecialiteHelp" class="form-text text-muted">
              @if ($errors->has('specialites'))
              @foreach ($errors->get('specialites') as $message)
              <p class="text-danger">{{ $message }}</p>
              @endforeach
              @endif
          </small>
      </div>
      <div class="form-group">
        <label for="exampleInputMatricule">Matricule</label>
        <input type="number" name="matricule" class="form-control" id="exampleInputMatricule" aria-describedby="MatriculeHelp" placeholder="Enter le numero de Matricule">
        <small id="MatriculeHelp" class="form-text text-muted">
            @if ($errors->has('matricule'))
            @foreach ($errors->get('matricule') as $message)
            <p class="text-danger">{{ $message }}</p>
            @endforeach
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