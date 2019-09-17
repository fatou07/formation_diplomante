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
                <a href="{{route('diplomes.create')}}"><div class="btn btn-warning">Nouveaux Diplomes <i class="material-icons">add</i></div></a> 
            </p>
          </div>
          
         
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="table-diplomes">
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
                  <a href="{{ route('diplomes.edit',$diplome->iddiplomes)}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i>
                  </a>
              </td>
              <td>
                 {{--  <form action="{{ route('diplomes.destroy', $diplome->iddiplomes)}}" method="post">
                    @csrf
                    @method('DELETE')
                    
                  
                   <button class="btn btn-danger" type="submit">
                      <i class="fa fa-trash"></i>
                  </button> 
                  </form> --}}
                  <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$diplome->iddiplomes}})" 
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
    <form action="{{ route('diplomes.destroy', $diplome->iddiplomes)}}" id="deleteForm" method="post">
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
 
 var table = $('#table-diplomes').DataTable({
  "columns": [
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

$('#table-diplomes').on("click", "button", function(){
console.log($(this).parent());
table.row($(this).parents('tr')).remove().draw(false);


      

}); 

</script>

<script type="text/javascript">
  function deleteData(iddiplomes)
  {
      var iddiplomes = iddiplomes;
      var url = '{{ route("diplomes.destroy", ":iddiplomes") }}';
      url = url.replace(':iddiplomes', iddiplomes);
      $("#deleteForm").attr('action', url);
  }

  function formSubmit()
  {
      $("#deleteForm").submit();
  }
</script>

@endpush 
  
  
      
  
 