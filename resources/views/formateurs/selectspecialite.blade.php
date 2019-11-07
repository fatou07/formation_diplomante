@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Formation diplomante DRH </h4>
                  <h4>Vous avez choisi la specialité : {{$service->nom ?? "Aucun service choisi" }}<br/> </h4>
                  <p class="card-category"> Selection de la spécialité du Formateur
                      {{-- <a href="{{route('clients.create')}}"><div class="btn btn-warning">Nouveau Client <i class="material-icons">add</i></div></a>  --}}
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-specialites">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nom
                        </th>
                        
                        <th>
                          Action
                          </th>
                      </thead>
                      <tbody>
                          
                      </tbody>
                     
                    </table>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-specialites').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('specialites.list')}}",
            columns: [
                    { data: 'idspecialites', name: 'idspecialites' },
                    { data: 'nom', name: 'nom' },
                   
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('formateurs.create','specialites=:idspecialites')!!}".replace(':idspecialites', data.idservices);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fad fa-pencil-alt">affecter</i></a>';
                        },
                        "targets": 2
                        },

                ],
              
          });
      });
      </script>

          
      @endpush