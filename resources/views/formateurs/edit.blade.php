@extends('layout.default')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Editer Formateur</h3>
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
        <form method="post" action="{{ route('formateurs.update', $formateur->idformateurs) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group col-md-4">

                <label for="nom">nom</label>
                <input type="text" class="form-control" name="nom" value={{ $formateur->nom }} />
            </div>

            <div class="form-group col-md-4">
                <label for="prenom">prenom</label>
                <input type="text" class="form-control" name="prenom" value={{ $formateur->prenom}} />
            </div> 
            <div class="form-group col-md-4">
                <label for="date_naissance">date de naissance</label>
                <input type="date" class="form-control" name="date_naissance" value={{ $formateur->date_naissance}} />
            </div> 
            <div class="form-group col-md-4">
                <label for="lieu_naissance">lieu de naissance</label>
                <input type="text" class="form-control" name="lieu_naissance" value={{ $formateur->lieu_naissance}} />
            </div> 
            <div class="form-group col-md-4">
                <label for="cni">CNI</label>
                <input type="int" class="form-control" name="cni" value={{$formateur->cni}} />
            </div> 
            {{-- <div class="form-group col-md-4">
                <label for="services">services</label>
                <input type="text" class="form-control" name="services" value={{$formateur->services}} />
            </div> 
            <div class="form-group col-md-4">
                <label for="diplomes">diplomes</label>
                <input type="text" class="form-control" name="diplomes" value={{$formateur->diplomes}} />
            </div>  --}}
            <div class="form-group col-md-4">
                <label for="matricule">matricule</label>
                <input type="int" class="form-control" name="matricule" value={{$formateur->matricule}} />
            </div> 
            <div class="form-group col-md-4">
                <label for="telephone">telephone</label>
                <input type="int" class="form-control" name="telephone" value={{ $formateur->telephone}} />
            </div>           
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <button type="button" class="btn btn-secondary"  onclick="history.back()" >Annuler</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection