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
                <a href="{{route('diplomes.create')}}"><div class="btn btn-warning">Nouveau Diplome <i class="material-icons">ajouter</i></div></a> 
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
            
            <td colspan = 2>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($diplomes as $diplome)
          <tr>
              <td>{{$diplome->iddiplomes}}</td>
              <td>{{$diplome->nom}}</td>
              
              <td>
                  <a href="{{ route('diplomes.edit',$diplome->iddiplomes)}}" class="btn btn-primary">modifier</a>
              </td>
              <td>
                  <form action="{{ route('diplomes.destroy', $diplome->iddiplomes)}}" method="post">
                    @csrf
                    @method('DELETE')
                    
                  
                   <button class="btn btn-danger" type="submit">Supprimer</button> 
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
  
 