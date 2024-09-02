<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Gestor</title>
    @vite('./resources/sass/app.scss')
    @vite('./resources/js/app.js')
    <link rel="shortcut icon" href="{{ asset('imgs/favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> 
</head>

<body>
    <h1 class="text-center mt-5 mb-5 fw-bold">MI GESTOR DE TAREAS!!</h1><!-- JOHAN SERRATO ACOSTA-->

    <div class="container">

        <!--aqui va include mesaages-->

        <div class="row justify-content-md-center">
            <div class="col-md-4" style="border-right: 1px solid #dee2e6;">
                <h1 class="text-center">Registrar Tarea <hr></h1>
                @include('tareas.create') 
            </div>

            <div class="col-md-8">
                @if (empty(trim($__env->yieldContent('content'))))
                    <h1 class="text-center">Lista de tareas <hr></h1>
                    @include('tareas.index') 
                @else
                    @yield('content')
                @endif
            </div>
        </div>
    </div>

</body>

</html><!-- JOHAN SERRATO ACOSTA-->