@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')

<style>

    h1{
        color: rgba(26, 28, 150, 0.76);
    }

</style>

<br>

<h1>Tus indicadores</h1><br>

<table class="table">
    <thead>
        <tr>
            <th>ID agente</th>
            <th>Chat atendidos</th>
            <th>Tiempo promedio de manejo</th>
            <th>Calificación de satisfacción del cliente</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($indicator as $indicadorsito)
            <tr>
                <td>{{$indicadorsito->id_agente }}</td>
                <td>{{$indicadorsito->chat_atendidos }}</td>
                <td>{{$indicadorsito->tiempo_promedio_chat }}</td>
                <td>{{$indicadorsito->calificacion_satisfaccion }}</td>
            </tr>
        @endforeach

    </tbody>
</table>

<div class="container">
    <div class="row justify-content-center">
      <div class="card" style="width: 20rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/0ktvc-Kwp70" class="embed-item" allowfullscreen></iframe>
        </div>
        <div class="card-body">
          <h5 class="card-title">Video coorporativo</h5>
          <p class="card-text">En proceso de arquitectura</p>
          <a href="/registro/create" class="btn btn-primary">Regresar a login</a>
        </div>
      </div>
    </div>
  </div>

@endsection
