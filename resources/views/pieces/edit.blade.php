@extends('layout.default')
@section('content')


<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editer une piece</h1>

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
        <form method="post" action="{{ route('pieces.update', $piece->idpieces) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nom">nom de la piéce</label>
                <input type="text" class="form-control" name="nom" value={{ $piece->nom }} />
            </div>

            <div class="form-group">
                <label for="formateurs_idformateurs">id_formateur</label>
                <input type="text" class="form-control" name="formateurs_idformateurs" value={{ $piece->formateurs_idformateurs }} />
            </div> 

          
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
@endsection