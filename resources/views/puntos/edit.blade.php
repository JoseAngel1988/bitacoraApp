@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')

<style>
  .transparent-form {
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent white background */
  padding: 20px; /* Add some padding for better visual separation */
  border: 1px solid rgba(0, 0, 0, 0.5); /* Light border for outline */
}

.shorter-input {
  width: 200px; /* Set a specific width for shorter input fields */
}


</style>
<br><br>

<h3>Actualiza tus puntos Destinica</h3>
<form action="/punto" method="post" enctype="multipart/form-data" class="transparent-form">
  @csrf
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre del Agente</label>
    <input type="text" class="form-control shorter-input" id="nombre" value="{{$point->nombre}}" name="nombre">
  </div>
  <div class="mb-3">
    <label for="area" class="form-label">Área o SAG</label>
    <input type="text" class="form-control shorter-input" id="area" value="{{$point->area}}" name="area">
  </div>
  <div class="mb-3">
    <label for="puntos" class="form-label">Actualiza tus puntos</label>
    <input type="text" class="form-control shorter-input" id="puntos" value="{{$point->puntos}}" name="puntos">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
