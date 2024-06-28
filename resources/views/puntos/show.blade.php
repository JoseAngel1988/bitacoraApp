@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')

<br>
<h2>Detalles del registro</h2>

<div class="card" style="width: 18rem;">
    <img src="https://images.pexels.com/photos/7005696/pexels-photo-7005696.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $point->nombre }}</h5>
        <p class="card-text">{{ $point->area }}</p>
        <p class="card-text">{{ $point->puntos }}</p>
        <a href="/punto/{{ $point->id }}/edit" class="btn btn-primary">Cambiar puntos</a>


    </div>
</div>

@endsection
