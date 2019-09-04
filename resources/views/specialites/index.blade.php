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
            <p class="card-category"> specialites
                <a href="{{route('specialites.create')}}"><div class="btn btn-warning">Nouveaux specialites <i class="material-icons">add</i></div></a> 
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
          @foreach($specialites as $specialite)
          <tr>
              <td>{{$specialite->idspecialites}}</td>
              <td>{{$specialite->nom}}</td>
             
              
              <td>
                  <a href="{{ route('specialites.edit',$specialite->idspecialites)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                  <form action="{{ route('specialites.destroy', $specialite->idspecialites)}}" method="post">
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
  
      