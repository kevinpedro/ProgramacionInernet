@extends('layouts.app')
@section('content')
{{-- dd($usuarios) --}}
<div class="row">
  <div class="col=-md-12">
    
<h1>
  Listado de Usuarios
  
</h1>
    <table class = "table;"
  <thead>
    <tr>
    <th>Nombre</th>
    <th>Correo</th>
      
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario);
      <tr>
      <td>{{$usuarios->name}}</td>
        <td>{{$usuarios->email}}</td>
      </tr>
    </tbody>
  </div>
</div>
@endsection
