@extends('layouts.app')
@section('title')
    | Editar tarea
@endsection

@section('content')
<h1 class="text-center">
    <a class="float-start" title="Volver" href="{{ route('tareas.index') }}"> 
        <i class="bi bi-arrow-left-circle"></i>
    </a>
    Editar datos de la tarea <hr>
</h1>

<form action="{{ route('tareas.update', $tarea->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" required value="{{ $tarea->titulo }}"> 
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3" required>{{ $tarea->descripcion }}</textarea> 
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6 mb-3">
            <label class="form-label">Estado</label>
            <select name="completado" class="form-control" required>
            <option value="Completada" {{ $tarea->completado == 'Completada' ? 'selected' : '' }}>Completada</option>
            <option value="Pendiente" {{ $tarea->completado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                <!--<option value="Completada" {{ $tarea->completado ? 'selected' : '' }}>Completada</option>
                <option value="Pendiente" {{ $tarea->completado ? '' : 'selected' }}>Pendiente</option>-->
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Fecha de Registro</label>
            <input type="text" class="form-control" readonly value="{{ $tarea->fechaRegistro->format('d/m/Y') }}"> 
        </div>
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary btn_add">
            Actualizar datos de la tarea
        </button>
    </div>
</form>
@endsection <!-- JOHAN SERRATO ACOSTA-->