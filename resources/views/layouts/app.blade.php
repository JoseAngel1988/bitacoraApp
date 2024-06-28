<html>
    <head>
        <title>📶Bitacora Chat  @yield('titulo', 'crear registro')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body {
              background-image: url('https://images.pexels.com/photos/7709166/pexels-photo-7709166.jpeg?auto=compress&cs=tinysrgb&w=600');
              background-repeat: repeat;
              background-size: cover;
              background-position: center;

            }


            


          </style>

    </head>
    <body >

<div class="container">
 <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/punto">🏆</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/registro/create">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/indicador/">Tablero de indicadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/indicador/create">Resultados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/punto/create">Puntos</a>
                </li>
                <li class="nav-item">
                    <img src="https://images.pexels.com/photos/7948054/pexels-photo-7948054.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" width="50" height="50" class="ml-auto">
                </li>
                <!-- Agrega más elementos de menú según tus necesidades -->
            </ul>
        </div>
    </div>
</nav>

@yield('contenido')

<!-- Contenido de la página -->
<div class="container mt-4">
    <!-- Aquí puedes agregar el contenido de tu página de encuesta -->

    <!-- ... -->
</div>

        </div>
    </body>

</html>

