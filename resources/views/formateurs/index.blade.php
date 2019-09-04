@extends('layout.default')
@section('content')
<div class="content">
    <div class="container-fluid">
<div class="row">
  <div class="col-sm-12">
      {{-- <h1 class="display-3">Pieces</h1>   --}}  
    <table class="table table-striped">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Formation Diplomante DRH</h4>
            <p class="card-category"> 
                <a href="{{route('pieces.create')}}"><div class="btn btn-warning">Nouveaux formateurs <i class="material-icons">add</i></div></a> 
            </p>
          </div>
          <div class="col-sm-12">

              @if(session()->get('success'))
                <div class="alert alert-success">
                  {{ session()->get('success') }}  
                </div>
              @endif
            </div>
      <thead>
          <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>date_naissance</td>
            <td>lieu_naissance</td>
            <td>cni</td>
            <td>services</td>
            <td>diplomes</td>
            <td>matricule</td>
            <td>Telephone</td>
            
            
            <td colspan = 10>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($formateurs as $formateur)
          <tr>
              <td>{{$formateur->idformateurs}}</td>
              <td>{{$formateur->nom}}</td>
              <td>{{$formateur->prenom}}</td>
              <td>{{$formateur->date_naissance}}</td>
              <td>{{$formateur->lieu_naissance}}</td>
              <td>{{$formateur->cni}}</td>
              <td>{{$formateur->services}}</td>
              <td>{{$formateur->diplomes}}</td>
              <td>{{$formateur->matricule}}</td>
              <td>{{$formateur->telephone}}</td>
              
              <td>
                  <a href="{{ route('formateurs.edit',$formateur->idformateurs)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                  <form action="{{ route('formateurs.destroy', $formateur->idformateurs)}}" method="post">
                    @csrf
                    @method('DELETE')
                    
                  
                   <button class="btn btn-danger" type="submit">Delete</button> 
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  <div>
  </div>
 
</div>
</div>

  @endsection