@extends('layouts.app')

@section('title')
    | Detalles de la tarea
@endsection

@section('content')
<h1 class="text-center">
    <a class="float-start" title="Volver" href="{{ route('tareas.index') }}"> 
        <i class="bi bi-arrow-left-circle"></i>
    </a>
    Datos de la tarea <hr>
</h1>

<ul class="list-group list-group-flush">
    <li class="list-group-item"> Título: &nbsp; &nbsp; <strong> {{ $tarea->titulo }}</strong></li>
    <li class="list-group-item"> Descripción: &nbsp; &nbsp; <strong> {{ $tarea->descripcion }}</strong></li>
    <li class="list-group-item"> Estado: &nbsp; &nbsp; <strong> {{ $tarea->completado ? 'Completada' : 'Pendiente' }}</strong></li>
    <li class="list-group-item"> Fecha de registro: &nbsp; &nbsp; <strong> {{ $tarea->fechaRegistro->format('d/m/Y') }}</strong></li> 
</ul>
@endsection

<!-- JOHAN SERRATO ACOSTA-->