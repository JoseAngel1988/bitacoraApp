@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')
<br><br>

<div class="container">
    <div class="row justify-content-center">
      <div class="card" style="width: 20rem;">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/0ktvc-Kwp70" class="embed-item" allowfullscreen></iframe>
        </div>
        <div class="card-body">
          <h5 class="card-title">Video coorporativo</h5>
          <p class="card-text">En proceso de arquitectura</p>
          <a href="#" class="btn btn-primary">ingresar</a>
        </div>
      </div>
    </div>
  </div>

@endsection
