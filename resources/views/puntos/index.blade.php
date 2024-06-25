@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')

<br>
<h3 class="text-center">Cantidad de puntos acumulados</h3>
<br>
<div class="row">
    @foreach ($point as $puntico )
    <div class="col-sm"><br>

        <div class="card" style="width: 18rem;">
            <img src="https://images.pexels.com/photos/7005696/pexels-photo-7005696.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$puntico->nombre}}</h5>
              <p class="card-text">{{$puntico->area}}</p>
              <p class="card-text">{{$puntico->puntos}}</p>
              <a href="/punto/show" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

    </div>

    @endforeach


@endsection
