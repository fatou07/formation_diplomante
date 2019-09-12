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
                <a href="{{route('services.create')}}"><div class="btn btn-warning">Nouveaux services <i class="material-icons">add</i></div></a> 
            </p>
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
        @foreach($services as $service)
          <tr>
              <td>{{$service->idservices}}</td>
              <td>{{$service->nom}}</td>  
              <td>{{$service->adresse}}</td>  
              <td>{{$service->telephone}}</td>  
              
              <td>
                  <a href="{{ route('services.edit',$service->idservices)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>

                  <form action="{{ route('services.destroy', $service->idservices)}}" method="post" >
                    @csrf
                    @method('DELETE')
                   <button class="btn btn-danger" type="submit">Delete</button> 
              
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
@endpush 
  

         {{--  @foreach($services as $service)
          <tr>
              <td>{{$service->idservices}}</td>
              <td>{{$service->nom}}</td>
              <td>{{$service->adresse}}</td>
              <td>{{$service->telephone}}</td>
              
              <td>
                  <a href="{{ route('services.edit',$service->idservices)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                  <form action="{{ route('services.destroy', $service->idservices)}}" method="post">
                    @csrf
                    @method('DELETE')
                    
                  
                   <button class="btn btn-danger" type="submit">Delete</button> 
                  </form>
              </td>
          </tr>
          @endforeach --}}
     