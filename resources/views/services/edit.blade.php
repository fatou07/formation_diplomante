@extends('layout.default')
@section('content')


<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="display-3">modifier un service</h3>

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
        <form method="post" action="{{ route('services.update', $service->idservices) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nom">nom de l'Etablissement</label>
                <input type="text" class="form-control" name="nom" value={{ $service->nom }} />
            </div>

            <div class="form-group">
                <label for="adresse">adresse</label>
                <input type="text" class="form-control" name="adresse" value={{ $service->adresse}} />
            </div> 
            <div class="form-group">
                <label for="telephone">telephone</label>
                <input type="text" class="form-control" name="telephone" value={{ $service->telephone}} />
            </div> 

          
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
@endsection