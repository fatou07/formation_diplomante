@extends('layout.default')
@section('content')
<!DOCTYPE html>
<html lang="en">



<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Formateurs</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Formateur::count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">ETABLISSEMENNTS</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Service::count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">PIECES</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{App\Piece::count()}}</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SPECIALITES</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{App\Specialite::count()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-lg-6">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header">
                  MOT DE LA DIRECTRICE DES RESSOURCES HUMAINES
                </div>
                <div class="card-body">
                  This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example.
                </div>
              </div>

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">PIECES A FOURNIR</h6>
                </div>
                <div class="card-body">
                  <table>
                  <th> 
                    CV
                  
                </th>
                <th>
                  
                    demande manuscrite...
                  
                </th>
              </table>
              <p class="card-category"> 
                  <a href="{{route('formateurs.selectservice')}}"><div class="btn btn-warning">Nouveaux Formateurs <i class="material-icons">add</i></div></a> 
              </p>
                </div>
              </div>

            </div>

            <div class="col-lg-6">

              <!-- Dropdown Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">
                    MOT DE LA DIRECTRICE DES RESSOURCES HUMAINES</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  Dropdown menus can be placed in the card header in order to extend the functionality of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis icon in the card header can be clicked on in order to toggle a dropdown menu.
                </div>
              </div>

              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">CONTACTEZ NOUS</h6>
                    
                  </div>                      
                  <div class="card-body">
                     
                      @if(Session::has('success'))
                      <div class="alert alert-success">
                        {{ Session::get('success') }}
                      </div>
                   @endif
                   {!! Form::open(['route'=>'contactus.store']) !!}
                   <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                   {!! Form::label('Name:') !!}
                   {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Entrer votre nom']) !!}
                   <span class="text-danger">{{ $errors->first('name') }}</span>
                   </div>
                   <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                   {!! Form::label('Email:') !!}
                   {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Entrer votre Email']) !!}
                   <span class="text-danger">{{ $errors->first('email') }}</span>
                   </div>
                   <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                   {!! Form::label('Message:') !!}
                   {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Entrer Message']) !!}
                   <span class="text-danger">{{ $errors->first('message') }}</span>
                   </div>
                   <div class="form-group">
                   <button class="btn btn-success">Contactez-nous!</button>
                   </div>
                   {!! Form::close() !!}
                    </div>
                 
                </div>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
@endsection
