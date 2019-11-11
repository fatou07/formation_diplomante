<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('layout.default2')}}">
      {{-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div> --}}
      <div class="sidebar-brand-text mx-3">MEFPA-DRH Formation <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('layout.default2')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de bord</span></a>
    </li>>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-school"></i>
          <span>SERVICES</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">GESTION SERVICES:</h6>
            <a class="collapse-item" href="{{route('services.index')}}">Liste Service</a>
            <a class="collapse-item" href="{{route('services.create')}}">Ajout Service</a>
           {{--  <a class="collapse-item" href="{{route('specialites.index')}}">Liste spécialité</a>
            <a class="collapse-item" href="{{route('specialites.create')}}">Ajout spécialité</a> --}}



          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-fw fa-user-tie"></i>
          <span>DEMANDES</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">DEMANDES AGENTS:</h6>
            <a class="collapse-item" href="{{route('formateurs.index')}}">Liste</a>
          <a class="collapse-item" href="{{route('formateurs.selectservice')}}">Nouvelle demande</a>
           {{--  <a class="collapse-item" href="utilities-animation.html">Affichage</a> --}}
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

    

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>PIECES</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion pièces:</h6>
            <a class="collapse-item" href="{{route('pieces.index')}}">Listes les pieces</a>
           {{--  <a class="collapse-item" href="{{route('pieces.create')}}">Ajouter une piece</a> --}}
            
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>COMPTE</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion Compte:</h6>
            <a class="collapse-item" href="{{route('register')}}">Créer un compte</a>
           

          </div>
        </div>
      </li>

  

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>