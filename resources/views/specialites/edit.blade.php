@extends('layout.default')
@section('content')

{{-- 
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="display-3">Editer le nom du Specialite</h3> --}}
        
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Editer Specialité</h3>
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
        <form method="post" action="{{ route('specialites.update', $specialite->idspecialites) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group col-md-4">
                
               <label for="nom">nom du specialite</label>
                <input type="text" class="form-control" name="nom" value={{ $specialite->nom }} />
            </div>

            <div class="form-group col-md-4">
                <label for="formateurs_idformateurs">id_formateur</label>
                <input type="text" class="form-control" name="formateurs_idformateurs" value={{ $specialite->formateurs_idformateurs }} />
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
            <button type="button" class="btn btn-secondary"  onclick="history.back()" >Annuler</button>
        </form>
    </div>
    </div>
</div>
</div>
@endsection