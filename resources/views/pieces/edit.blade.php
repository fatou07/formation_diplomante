@extends('layout.default')
@section('content')

{{-- 
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="display-3">Editer une piece</h3> --}}
                
<div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h3 class="card-title">Editer Piéce</h3>
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
        <form method="post" action="{{ route('pieces.update', $piece->idpieces) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nom">nom de la piéce</label>
                <input type="text" class="form-control" name="nom" value={{ $piece->nom }} />
            </div>

            {{-- <div class="form-group">
                <label for="formateurs_idformateurs">id_formateur</label>
                <input type="text" class="form-control" name="formateurs_idformateurs" value={{ $piece->formateurs_idformateurs }} />
            </div>  --}}

          
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <button type="button" class="btn btn-secondary"  onclick="history.back()" >Annuler</button>
        </form>
    </div>
    </div>
</div>
</div>
</div>
</div>

@endsection