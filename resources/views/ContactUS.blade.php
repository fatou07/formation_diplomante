@extends('layout.default')
@section('content')
<div class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header card-header-primary">
              <h4 class="card-title ">Formation Diplomante DRH</h4>
              <h3 class="card-title">Contactez nous</h3>
              <p class="card-category">
                  {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                  {{-- <a href="#" target="_blank">full documentation.</a> --}}
              </p>
          </div>
          <div class="card-body">
              <div class="row pt-5"></div>
<body>
{{-- <div class="container">
<h2>Formation diplomante DRH</h2>
<h1>contactez nous</h1> --}}
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
{{-- </div> --}}
</body>
</div>
</div>
</div>
</div>

    
        @endsection
