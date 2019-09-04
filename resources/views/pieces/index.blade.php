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
            <p class="card-category"> Pieces
                <a href="{{route('pieces.create')}}"><div class="btn btn-warning">Nouveaux pieces <i class="material-icons">add</i></div></a> 
            </p>
          </div>
          <div class="col-sm-12">

              @if(session()->get('success'))
                <div class="alert alert-success">
                  {{ session()->get('success') }}  
                </div>
              @endif
            </div>
            <thead class=" text-primary">
              <th>
                ID
              </th>
              <th>
                Nom
              </th>
      </thead>
      <tbody>
         @foreach($pieces as $piece)
          <tr>
              <td>{{$piece->idpieces}}</td>
              <td>{{$piece->nom}}</td>
              
              <td>
                  <a href="{{ route('pieces.edit',$piece->idpieces)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                  <form action="{{ route('pieces.destroy', $piece->idpieces)}}" method="post" >
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
  
  