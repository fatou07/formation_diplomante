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
                  <form action="{{ route('diplomes.destroy', $diplome->iddiplomes)}}" method="post">
                    @csrf
                    @method('DELETE')
                    
                  
                   <button class="btn btn-danger" type="submit">
                      <i class="fa fa-trash"></i>
                  </button> 
                  </form>
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
@endpush 
  
  
      
  
 