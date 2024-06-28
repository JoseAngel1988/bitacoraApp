@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')

<style>
 .col-md-6{
    color: rgba(26, 28, 150, 0.76);


 }

 .form-group {

    color: rgba(227, 242, 244, 0.76);
 }



</style>

<br><br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6"> <h1>Mi Bitácora</h1>
      <form action="/registro" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card" style="opacity: 0.8; background-color: rgba(0, 0, 0, 0.5);">
          <div class="card-header">Ingresar Usuario</div>
          <div class="card-body">
            @if ($errors->has('nombre'))
              <div class="alert alert-danger" role="alert">
                {{ $errors->first('nombre') }}
              </div>
            @endif
            <div class="form-group">
              <label for="nombre">Nombre del usuario</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required style="opacity: 0.5;">
            </div><br>
            <div class="form-group">
              <label for="correo">Correo Electrónico</label>
              <input type="email" class="form-control" id="correo" name="correo" required style="opacity: 0.5;">
            </div><br>
            <div class="form-group">
              <label for="contraseña">Contraseña</label>
              <input type="password" class="form-control" id="contraseña" name="contraseña" required style="opacity: 0.5;">
            </div><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection






