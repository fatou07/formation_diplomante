@extends('layout.default')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title" style="color:blue;">Editer Service</h3>
                <p class="card-category">
                    
                        <a target="_blank" href="{{route('layout.default2')}}">Accueil</a>.ou consulter la
                         <a href="{{route('services.index')}}" target="_blank">liste des services</a> 
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
        <form method="post" action="{{ route('services.update', $service->idservices) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group col-md-4">

                <label for="nom">Nom de l'Etablissement</label>
                <input type="text" class="form-control" name="nom" value={{ $service->nom }} />
            </div>

            <div class="form-group col-md-4">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" name="adresse" value={{ $service->adresse}} />
            </div> 
            <div class="form-group col-md-4">
                <label for="telephone">Telephone</label>
                <input type="text" class="form-control" name="telephone" value={{ $service->telephone}} />
            </div>     
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <button type="button" class="btn btn-secondary"  onclick="history.back()" >Annuler</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection