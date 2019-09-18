@extends('layout.default')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Editer Diplome</h3>
                <p class="card-category">
                    {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                    {{-- <a href="#" target="_blank">full documentation.</a> --}}
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
        <form method="post" action="{{ route('diplomes.update', $diplome->iddiplomes) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group col-md-4">

                <label for="nom">nom du diplome</label>
                <input type="text" class="form-control" name="nom" value={{ $diplome->nom }} />
            </div>

            <div class="form-group col-md-4 ">
                <label for="formateurs_idformateurs">id_formateur</label>
                <input type="text" class="form-control" name="formateurs_idformateurs" value={{ $diplome->formateurs_idformateurs }} />
            </div>          
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <button type="button" class="btn btn-secondary"  onclick="history.back()" >Annuler</button>

        </form>
    </div>
</div>
</div>
</div>
@endsection