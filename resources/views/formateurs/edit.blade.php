@extends('layout.default')
@section('content')


<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="display-3">modifier un Formateur</h3>

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
        <form method="post" action="{{ route('formateurs.update', $formateur->idformateurs) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nom">nom</label>
                <input type="text" class="form-control" name="nom" value={{ $formateur->nom }} />
            </div>

            <div class="form-group">
                <label for="prenom">prenom</label>
                <input type="text" class="form-control" name="prenom" value={{ $formateur->prenom}} />
            </div> 
            <div class="form-group">
                <label for="date_naissance">date de naissance</label>
                <input type="date" class="form-control" name="date_naissance" value={{ $formateur->date_naissance}} />
            </div> 
            <div class="form-group">
                <label for="lieu_naissance">lieu de naissance</label>
                <input type="text" class="form-control" name="lieu_naissance" value={{ $formateur->lieu_naissance}} />
            </div> 
            <div class="form-group">
                <label for="cni">CNI</label>
                <input type="int" class="form-control" name="cni" value={{$formateur->cni}} />
            </div> 
            <div class="form-group">
                <label for="services">services</label>
                <input type="text" class="form-control" name="services" value={{$formateur->services}} />
            </div> 
            <div class="form-group">
                <label for="diplomes">diplomes</label>
                <input type="text" class="form-control" name="diplomes" value={{$formateur->diplomes}} />
            </div> 
            <div class="form-group">
                <label for="matricule">matricule</label>
                <input type="int" class="form-control" name="matricule" value={{$formateur->matricule}} />
            </div> 
            <div class="form-group">
                <label for="telephone">telephone</label>
                <input type="int" class="form-control" name="telephone" value={{ $formateur->telephone}} />
            </div> 

          
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
@endsection