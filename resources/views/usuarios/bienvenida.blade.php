@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')
<br><br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>

    <link rel="stylesheet" href="welcome.css">
</head>
<body>

    <div id="welcome-message">
        <h1>Bienvenido, <span id="nombre">{{ $nombre }}</span>!</h1>
    </div>

    <script src="welcome.js"></script>
</body>
</html>

@endsection
