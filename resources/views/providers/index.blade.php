@extends('providers.layout')

@section('content')
<div class="row">
  <div class="col-lg-12 mg-tb">
    <div class="pull-left">
      <h1>ECO-UTM Provider Register Form</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('providers.create') }}">Register new provider</a>
    </div>
  </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>CNPJ</th>
    <th>Operations</th>
    <th width="280px">Actions</th>
  </tr>
  @foreach ($providers as $provider)
  <tr>
    <td>{{ $provider->id }}</td>
    <td>{{ $provider->name }}</td>
    <td>{{ $provider->email }}</td>
    <td>{{ $provider->cnpj }}</td>
    <td>{{ $provider->operations }}</td>
    <td>
      <form action="{{ route('providers.destroy',$provider->id) }}" method="POST">

        <a class="btn btn-info" href="{{ route('providers.show',$provider->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('providers.edit',$provider->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>

{!! $providers->links() !!}

@endsection