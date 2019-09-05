@extends('layout.default')
@section('content')


<div class="content">
    <div class="container-fluid">
<div class="row">
  <div class="col-sm-12">
      {{-- <h1 class="display-3">Pieces</h1>   --}}  
      @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Formation Diplomante DRH</h4>
            <p class="card-category"> 
                <a href="{{route('pieces.create')}}"><div class="btn btn-warning">Nouveaux pieces <i class="material-icons">add</i></div></a> 
            </p>
          </div>
          {{-- <div class="col-sm-12">

            </div> --}}
         
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="table-pieces">
            <thead  class=" text-primary" >
              <tr>
              <th>
                ID
              </th>
              <th>
                Nom
              </th>
            <th>
                Action
              </th> 
            </tr>
      </thead>
      <tbody>
       @foreach($pieces as $piece)
         {{--  <tr>
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
          </tr> --}}
 
          @endforeach 
      </tbody>
    </table>
  </div>
</div>
  <div>
  </div>
 
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modal_delete_piece" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="{{ route('pieces.destroy', $piece->idpieces)}}" method="post" id="modal_delete_piece"  >
    @csrf
    @method('DELETE')
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">etes-vous  sur de supprimer</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-header">
        <h5 class="modal-title" id="">appuyer sur close pour annuler</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{-- <div class="modal-body">
        ...
      </div> --}}
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Supprimer</button>
      </div>
    </div>
  </div>
</form>
</div>


  @endsection
  
  @push('scripts')
  <script type="text/javascript">
  $(document).ready(function () {

      $('#table-pieces').DataTable( { 
        "processing": true,
        "serverSide": true,
        "ajax": "{{route('pieces.list')}}",
        columns: [
                { data: 'idpieces', name: 'idpieces' },
                { data: 'nom', name: 'nom' },
              
                { data: null ,orderable: false, searchable: false}

            ],
            "columnDefs": [
                    {
                    "data": null,
                    "render": function (data, type, row) {
                    url_e =  "{!! route('pieces.edit',$piece->idpieces)!!}".replace(':id', data.id);
                    url_d =  "{!! route('pieces.destroy', $piece->idpieces)!!}".replace(':id', data.id);
                   
                    return '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">edit</i></a>'+
                   
                    
                    
                   
                    '<div class="btn btn-danger  put btn-delete-piece" title="Supprimer" data-href='+url_d+'><i class="material-icons">delete</i></div>';
                    },
                    "targets": 2
                    },
              
            ],
             //datables bouton
            dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
         
    ],
    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ] 
      });
      $("#table-pieces").off('click','.btn-delete-piece').on('click','.btn-delete-piece',function(){
        var href=$(this).data('href');
        $("#form_delete_piece").attr("action",href);
              
              $('#modal_delete_piece').modal();
            });
              
        
  });
 
  </script>

      
  @endpush

          

  
  