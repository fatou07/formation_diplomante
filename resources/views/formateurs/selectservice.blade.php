@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Formation diplomante DRH </h4>
                  <p class="card-category"> Selection du service pour le Formateur
                      {{-- <a href="{{route('clients.create')}}"><div class="btn btn-warning">Nouveau Client <i class="material-icons">add</i></div></a>  --}}
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-services">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nom
                        </th>
                        <th>
                            Tel
                        </th>
                        <th>
                          Adresse
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
          $('#table-services').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('services.list')}}",
            columns: [
                    { data: 'idservices', name: 'idservices' },
                    { data: 'nom', name: 'nom' },
                    { data: 'telephone', name: 'telephone' },
                    { data: 'adresse', name: 'adresse' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('formateurs.create','service=:idservices')!!}".replace(':idservices', data.idservices);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">Affecter</i></a>';
                        },
                        "targets": 4
                        },

                ],
              
          });
      });
      </script>

          
      @endpush