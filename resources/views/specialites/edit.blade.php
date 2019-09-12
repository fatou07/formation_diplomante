@extends('layout.default')
@section('content')


<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="display-3">Editer le nom du Specialite</h3>

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
        <form method="post" action="{{ route('specialites.update', $specialite->idspecialites) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nom">nom du specialite</label>
                <input type="text" class="form-control" name="nom" value={{ $specialite->nom }} />
            </div>

            <div class="form-group">
                <label for="formateurs_idformateurs">id_formateur</label>
                <input type="text" class="form-control" name="formateurs_idformateurs" value={{ $specialite->formateurs_idformateurs }} />
            </div> 

          
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
@endsection