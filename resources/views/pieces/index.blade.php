@extends('layout.default')
@section('content')


<div class="content">
    <div class="container-fluid">
<div class="row">
  <div class="col-sm-12">
      {{-- <h1 class="display-3">Pieces</h1>   --}}  
      {{-- @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif --}}
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title " style="color:blue;"><strong> Liste des piéces enregistrées</strong></h4>
         {{--    <p class="card-category"> 
                <a href="{{route('pieces.create')}}"><div class="btn btn-warning">Nouveaux pieces <i class="material-icons">add</i></div></a> 
            </p> --}}
          </div>
          
         
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="table-pieces">
            <thead >
              <tr>
             {{--  <td>
                ID
              </td> --}}
              <td>
                Nom de la piece
              </td>
              <td>
                Fichier
              </td>
              <td>
                Nom du Formateur
               </td>
               <td>
                Prenom du Formateur
               </td>
       
              <td>
               Matricule du Formateur
              </td>
      
                <td colspan = 5>Actions</td>
            </tr>
      </thead>
      <tbody>
        @foreach($pieces as $piece)
          <tr>
             {{--  <td>{{$piece->idpieces}}</td> --}}
              <td>{{$piece->nom}}</td>  
              <td>{{$piece->fichier}}</td>
              <td>{{$piece->formateur->nom}}</td>
              <td>{{$piece->formateur->prenom}}</td>
              <td>{{$piece->formateur->matricule}}</td>
              <td>
                
          
                  <a href="{{ route('pieces.edit',$piece->idpieces)}}" class="btn btn-primary" {{-- data-toggle="modal" data-target="#edit-modal" --}} >
                      
                    <i class="fa fa-edit"></i>
                  </a>
               </td>
              <td> 
               
                 {{--  <form action="{{ route('pieces.destroy', $piece->idpieces)}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" data-toggle="modal" onclick="deleteData({{$piece->idpieces}})" 
                        data-target="#DeleteModal">
                      <i class="fa fa-trash"></i>
                     </button> 
                    
                  </form>  --}}
                <a href="{{ route('pieces.destroy', $piece->idpieces)}}" data-toggle="modal" onclick="deleteData({{$piece->idpieces}})" 
                        data-target="#DeleteModal" class="btn btn-xs btn-danger">
                      <i class="fa fa-trash"></i>
                    </a> 
                
              </td> 
          </tr>          
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




  
    <!-- Modal content-->
    <div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <form action="{{ route('pieces.destroy', $piece->idpieces ?? "")}}" id="deleteForm" method="post">
        <div class="modal-dialog " role="document">
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
            <div class="modal-body">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
               
            </div>
            <div class="modal-footer">
                
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Oui, Supprimer</button>
                
            </div>
        </div>
      </div>
    </form>
  
 </div>

{{-- modal edit  --}}
{{-- <div class="modal fade" id="edit-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="edit-modal">modification d'une piéce</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
           
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('pieces.update', $piece->idpieces) }}">
          @method('PATCH') 
          @csrf
          <div class="form-group">

              <label for="nom">nom de la piéce</label>
              <input type="text" class="form-control" name="nom" value={{ $piece->nom }} />
          </div>

          <div class="form-group">
              <label for="formateurs_idformateurs">id_formateur</label>
              <input type="text" class="form-control" name="formateurs_idformateurs" value={{ $piece->formateurs_idformateurs }} />
          </div> 
      
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            
          </div>
        </form>     
      </div>
    </div>
  </div>
</div> --}}
{{-- modal delete --}}

  @endsection
  
  @push('scripts')
 

      
  <script type="text/javascript">
 
 var table = $('#table-pieces').DataTable({
  "columns": [
      null, 
      null,
      null,
      null,
      null,
      null,
    /*   null, */
      {
          "sortable": false
      }
  ],

   //datables bouton
 dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
         
    ],
    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
});



$('#table-pieces').on("click", "button", function(){
console.log($(this).parent());
table.row($(this).parents('tr')).remove().draw(false);
     

}); 

 </script>
  
  <script type="text/javascript">
    function deleteData(idpieces)
    {
        var idpieces = idpieces;
        var url = '{{ route("pieces.destroy", ":idpieces") }}';
        url = url.replace(':idpieces', idpieces);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit()
    {
        $("#deleteForm").submit();
    }
 </script>


@endpush 
  