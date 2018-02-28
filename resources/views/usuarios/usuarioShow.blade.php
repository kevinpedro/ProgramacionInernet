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