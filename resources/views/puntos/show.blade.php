@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')

<br>
<h2>Detalles del registro</h2>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $point->nombre }}</h5>
        <p class="card-text">{{ $point->area }}</p>
        <p class="card-text">{{ $point->puntos }}</p>
        <a href="/punto/{{ $point->id }}/edit" class="btn btn-warning">Cambiar puntos</a>
    </div>
</div>


@endsection
