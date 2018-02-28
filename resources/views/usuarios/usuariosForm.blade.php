@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-md-12">
    <h2>
      Capturar Nuevo Usuario
    </h2>
  </div>
</div>


<div class="row">
  <div class="col-md-8 offset-md-2">
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ action('UserController@store')}}" method="POST">
      <div class="form-group">
      <label for="name">Nombre </label>
      <input class="form-control" type = "text" name="name" placeholder="Nombre de Usuario" required>
      </div>
      
      <div class="form-group">
      <label for="email">Email </label>
      <input class="form-control" type = "email" name="email" placeholder="Correo del Usiario" required>
      </div>
      
      <div class="form-group">
      <label for="password">Contraseña </label>
      <input class="form-control" type = "password" name="password" placeholder="Introduzca su contraseña required">
      </div> 
      
      <div class="form-group">
      <label for="password_confirmation">Confirmar contraseña </label>
      <input class="form-control" type = "password" name="password" placeholder="Introduzca su contraseña required">
      </div>
      
      <button type="submit" class="btn btn-warning">Aceptar</button>

    </form>
  </div>
</div>
@endsection

