
@extends('layout.default')
@section('content')

<div>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            {{-- <div class="row"> --}}
           <!--    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
         {{--   <div class="col-lg-6 d-none d-lg-block">

            <img src="img.jpg"  height="650" width="440">
           </div> --}}
              <div class="justify-content-center">
                <div class="p-5">
                  <div class="text-center">
                    <h2 class="card-title" style="color:blue;"><strong> AJOUTER UN NOUVEAU UTILISATEUR</strong></h2>
                    
                  </div>
{{-- page formmmulaire --}}

<form method="POST" action="{{ route('register') }}" >
    @csrf

   
    <div class="form-group">
       {{--  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NOM') }}</label> --}}
     
            <input id="name" type="text" class="form-control form-control-user  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="NOM" >

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
     
    </div>

    <div class="form-group">
    

      {{--   <div class="col-md-6"> --}}
            <input id="email" type="email" class="form-control form-control-user  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
       {{--  </div> --}}
    </div>

    <div class="form-group">
        {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('MOT DE PASSE') }}</label>  --}}

     {{--    <div class="col-md-6"> --}}
            <input id="password" type="password" class="form-control form-control-user  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="MOT DE PASSE">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        {{-- </div> --}}
    </div>

    <div class="form-group">
      {{--   <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('CONFIRMER LE MOT DE PASSE') }}</label>  --}}

      
            <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRMER MOT DE PASSE">
        
    </div>


            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Valider') }}
            </button> 
            
          
            {{-- <a class="btn btn-primary btn-user btn-block" href="{{ route('login') }}">Se Connecter</a> --}}
         
    
</form>

</div>
</div>
{{-- </div> --}}
</div>
</div>

</div>

</div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</div>

@endsection