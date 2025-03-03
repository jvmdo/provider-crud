@extends('providers.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Register New Provider</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('providers.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('providers.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email"/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>CNPJ:</strong>
              <input type="text" name="cnpj" class="form-control" placeholder="CNPJ">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Operations:</strong>
              <input type="number" name="operations" class="form-control" placeholder="Operations">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
   
</form>
@endsection