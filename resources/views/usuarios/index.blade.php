@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Starter Interface</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hero-section {
            background-image: url('hero-image.jpg'); /* Replace with your hero image */
            background-size: cover;
            background-position: center;
            height: 500px; /* Adjust as needed */
            text-align: center;
            color: rgba(26, 28, 150, 0.76);
            padding: 100px 0;
        }

        .hero-section h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 20px;
            line-height: 1.5;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        .btn {
            margin: 10px;
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <h1>¡Bienvenido a tu Bitacora!</h1>
        <p>En este campo conoceras la percepcion de nuestros clientes.</p>
        <div class="button-container">
            <a href="#" class="btn btn-primary">Editar Usuario</a>
            <a href="#" class="btn btn-secondary">Nuestra esencia</a>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrBC71WE1T1WMYiDie2WJ7x2lV5fKVtRbF2iW26sRbo0L4yUi7KzLZ4jIWcoOP1i" crossorigin="anonymous"></script>
</body>
</html>

@endsection

