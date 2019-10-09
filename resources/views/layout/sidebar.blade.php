
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Formation diplomante <sup> DRH</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="{{route('layout.default2')}}">
        {{-- <i class="fas fa-fw fa-tachometer-alt"></i>  
        {{route('layout.default')}}
         --}}
        <span>Accueil</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

     <!-- Nav Item - Pages Collapse Menu -->
    {{--  <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i> 
        <i class="fas fa-fw fa-folder"></i>
         <span>Blogs</span>
       </a>
       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
           <h6 class="collapse-header"></h6>
         <a class="collapse-item" href="">Mot Ministre</a>
           <a class="collapse-item" href="">Mot du Directeur</a>
           <a class="collapse-item" href="{{route('formateurs.create')}}">Ajouter un dossier</a>
           <a class="collapse-item" href="">En attente de Validation</a>
           <a class="collapse-item" href="{{route('formateurs.index')}}">Rechercher un dossier</a>
           <a class="collapse-item" href="">Actualités</a>

         </div>
       </div>
     </li> --}}

<!-- Nav Item - Pages Collapse Menu -->
{{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
     <i class="fas fa-fw fa-cog"></i> 
     <i class="fas fa-fw fa-folder"></i>
      <span>Listing</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="">Liste non Formés</a>
        <a class="collapse-item" href="">Liste en Formation</a>
        <a class="collapse-item" href="">Liste Déja Formés</a>
        <a class="collapse-item" href="">Liste des fonctionnaires</a>
    
      </div>
    </div>
  </li> --}}

    <!-- Heading -->
     

    <div class="sidebar-heading">
       Pages
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
       {{--  <i class="fas fa-fw fa-cog"></i> --}}
       <i class="fas fa-fw fa-folder"></i>
        <span>etablissements</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"></h6>
        <a class="collapse-item" href="{{route('services.index')}}">liste des Services</a>
          <a class="collapse-item" href="{{route('services.create')}}">Ajoutez un Service</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
       {{--  <i class="fas fa-fw fa-wrench"></i> --}}
       <i class="fas fa-fw fa-folder"></i>
        <span>Specialités</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"></h6>
        <a class="collapse-item" href="{{route('specialites.index')}}">liste des specialités</a>
          <a class="collapse-item" href="{{route('specialites.create')}}">ajoutez un spécialité</a>
         {{--  <a class="collapse-item" href="utilities-animation.html">decisionnel</a>
          <a class="collapse-item" href="utilities-other.html">Other</a> --}}
        </div>
       {{--  <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">technique</h6>
          <a class="collapse-item" href="utilities-color.html">mecanique</a>
          <a class="collapse-item" href="utilities-border.html">electrique</a>
          <a class="collapse-item" href="utilities-animation.html">decisionnel</a>
          <a class="collapse-item" href="utilities-other.html">Other</a>
        </div> --}}
      </div>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i> 
       <i class="fas fa-fw fa-folder"></i>
        <span>Diplomes</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"></h6>
        <a class="collapse-item" href="{{route('diplomes.index')}}">liste des diplomes</a>
          <a class="collapse-item" href="{{route('diplomes.create')}}">ajoutez un diplome</a>
         <a class="collapse-item" href="utilities-animation.html">decisionnel</a>
          <a class="collapse-item" href="utilities-other.html">Other</a> 
        </div>
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">technique</h6>
          <a class="collapse-item" href="utilities-color.html">mecanique</a>
          <a class="collapse-item" href="utilities-border.html">electrique</a>
          <a class="collapse-item" href="utilities-animation.html">decisionnel</a>
          <a class="collapse-item" href="utilities-other.html">Other</a>
        </div> 
      </div>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
       {{--  <i class="fas fa-fw fa-wrench"></i> --}}
       <i class="fas fa-fw fa-folder"></i>
        <span>Formateurs</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"></h6>
        <a class="collapse-item" href="{{route('formateurs.index')}}">liste des formateurs</a>
          <a class="collapse-item" href="{{route('formateurs.create')}}">ajoutez un Formateur</a>
         {{--  <a class="collapse-item" href="utilities-animation.html">decisionnel</a>
          <a class="collapse-item" href="utilities-other.html">Other</a> --}}
        </div>
       {{--  <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">technique</h6>
          <a class="collapse-item" href="utilities-color.html">mecanique</a>
          <a class="collapse-item" href="utilities-border.html">electrique</a>
          <a class="collapse-item" href="utilities-animation.html">decisionnel</a>
          <a class="collapse-item" href="utilities-other.html">Other</a>
        </div> --}}
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
       {{--  <i class="fas fa-fw fa-wrench"></i> --}}
       <i class="fas fa-fw fa-folder"></i>
        <span>Piéces</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"></h6>
        <a class="collapse-item" href="{{route('pieces.index')}}">liste des piéces</a>
          <a class="collapse-item" href="{{route('pieces.create')}}">ajoutez une piéce</a>
         {{--  <a class="collapse-item" href="utilities-animation.html">decisionnel</a>
          <a class="collapse-item" href="utilities-other.html">Other</a> --}}
        </div>
       {{--  <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">technique</h6>
          <a class="collapse-item" href="utilities-color.html">mecanique</a>
          <a class="collapse-item" href="utilities-border.html">electrique</a>
          <a class="collapse-item" href="utilities-animation.html">decisionnel</a>
          <a class="collapse-item" href="utilities-other.html">Other</a>
        </div> --}}
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Contactez-nous
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>contact</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          {{-- <h6 class="collapse-header">Login Screens:</h6>
        <a class="collapse-item" href="{{route('login')}}">Login</a>
        <a class="collapse-item" href="{{route('register')}}">Register</a>
        <a class="collapse-item" href="{{route('formateurs.create')}}">enregistrer une demande</a>
        <a class="collapse-item" href="{{route('pieces.index')}}">Piéces à fournir</a> --}}
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="{{route('ContactUS')}}">nous contacter</a>
          <a class="collapse-item" href="blank.html">blog</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
    <a class="nav-link" href="{{route('specialites.index')}}">
        {{-- <i class="fas fa-fw fa-chart-area"></i> --}}
        <i class="fas fa-fw fa-table"></i>
        <span>listes des formations diplomante</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
    <a class="nav-link" href="{{route('formateurs.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>listes des formateurs</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>