@extends('layout.default')
@section('content')
<div class="content">
  <div class="container-fluid">
<div class="row">
<div class="col-sm-12">
@if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{ $message }}</p>
  </div>
@endif
  <div class="card">
      <div class="card-header card-header-primary">
          <h4 class="card-title ">Formation Diplomante DRH</h4>
          <p class="card-category"> 
              <a href="{{route('formateurs.selectservice')}}"><div class="btn btn-warning">Nouveaux Formateurs <i class="material-icons">add</i></div></a> 
          </p>
        </div>
        
       
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="table-formateurs">
         
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
              <td>{{$formateur->service->nom}}</td>            
              <td>{{$formateur->diplomes}}</td>
              <td>{{$formateur->matricule}}</td>
              <td>{{$formateur->telephone}}</td>

             
              <td>
                  <a href="{{ route('formateurs.edit',$formateur->idformateurs)}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i>
                  </a>
              </td>
             
              <td>
                  {{-- <form action="{{ route('formateurs.destroy', $formateur->idformateurs)}}" method="post">
                    @csrf
                    @method('DELETE')
                    
                  
                   <button class="btn btn-danger" type="submit">
                      <i class="fa fa-trash"></i>
                  </button> 
                  </form> --}}
                  <a href="{{ route('formateurs.destroy', $formateur->idformateurs)}}" data-toggle="modal" onclick="deleteData({{$formateur->idformateurs}})" 
                      data-target="#DeleteModal" class="btn btn-xs btn-danger">
                    <i class="fa fa-trash"></i>
                  </a>
              </td>
               <td>
                <a href="{{ route('formateurs.show',$formateur->idformateurs)}}" class="btn btn-primary">
                    Afficher
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
        <form action="{{ route('formateurs.destroy', $formateur->idformateurs)}}" id="deleteForm" method="post">
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

  @endsection
  @push('scripts')
  <script type="text/javascript">
 
 var table = $('#table-formateurs').DataTable({
  "columns": [
      null, 
      null,
      null,
      null, 
      null,
      null,
      null, 
      null,
      null,
      null, 
      null,
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


$('#table-formateurs').on("click", "button", function(){
console.log($(this).parent());
table.row($(this).parents('tr')).remove().draw(false);
}); 

</script>

<script type="text/javascript">
  function deleteData(idformateurs)
  {
      var idformateurs = idformateurs;
      var url = '{{ route("formateurs.destroy", ":idformateurs") }}';
      url = url.replace(':idformateurs', idformateurs);
      $("#deleteForm").attr('action', url);
  }

  function formSubmit()
  {
      $("#deleteForm").submit();
  }
</script>

@endpush 
  