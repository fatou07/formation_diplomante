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
            {{-- <p class="card-category"> 
                <a href="{{route('services.create')}}"><div class="btn btn-warning">Nouveaux services <i class="material-icons">add</i></div></a> 
            </p> --}}
          </div>
          
         
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="table-services">
            <thead >
              <tr>
              <td>
                ID
              </td>
              <td>
                Nom
              </td>
              <td>
                Adresse
                </td>
                <td>
                  Telephone
                 </td>
      
                <td colspan = 4>Actions</td> 
            </tr>
      </thead>
      <tbody>
        @foreach ($services as $service)
          <tr>
              <td>{{$service->idservices}}</td>
              <td>{{$service->nom}}</td>  
              <td>{{$service->adresse}}</td>  
              <td>{{$service->telephone}}</td>  
              
           <td>
                  <a href="{{ route('formateurs.create')}}" class="btn btn-primary">
                    Choisir
                  </a> 
              </td> 
              <td>

                   <form action="{{ route('services.destroy', $service->idservices)}}" method="post" >
                    @csrf
                    @method('DELETE')
                   <button class="btn btn-danger" type="submit">
                      <i class="fa fa-trash"></i>
                  </button> 
              
                  </form>  
                  {{-- <a href="{{ route('services.destroy', $service->idservices)}}" data-toggle="modal" onclick="deleteData({{$service->idservices}})" 
                      data-target="#DeleteModal" class="btn btn-xs btn-danger">
                    <i class="fa fa-trash"></i>
                  </a> 
              </td> --}}
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
 {{-- <div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <form action="{{ route('services.destroy', $service->idservices)}}" id="deleteForm" method="post">
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
  
 </div> --}}


  @endsection
  
  @push('scripts')
 

      
  <script type="text/javascript">
 
 var table = $('#table-services').DataTable({
  "columns": [
      null, 
      null,
      null,
      null,
      null,
      {
          "sortable": false
      }
  ],

   //datables bouto
 dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
         
    ],
    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
});



$('#table-services').on("click", "button", function(){
console.log($(this).parent());
table.row($(this).parents('tr')).remove().draw(false);


      

}); 

</script>


  
{{-- <script type="text/javascript">
  function deleteData(idservices)
  {
      var idservices = idservices;
      var url = '{{ route("services.destroy", ":idservices") }}';
      url = url.replace(':idservices', idservices);
      $("#deleteForm").attr('action', url);
  }

  function formSubmit()
  {
      $("#deleteForm").submit();
  }
</script> --}}

@endpush 
  

         
     