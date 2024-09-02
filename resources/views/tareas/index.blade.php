@extends('layouts.app')

@section('content')

<h1 class="text-center">Lista de tareas <hr></h1>

<!-- Formulario de filtro -->
<form method="GET" action="{{ route('tareas.index') }}">
    <div class="mb-3">
        <label class="form-label">Filtrar por estado:</label>
        <select name="estado" class="form-select" onchange="this.form.submit()">
            <option value="">Todas</option>
            <option value="Completada" {{ request('estado') == 'Completada' ? 'selected' : '' }}>Completadas</option>
            <option value="Pendiente" {{ request('estado') == 'Pendiente' ? 'selected' : '' }}>Pendientes</option>
        </select>
    </div>
</form>

<!--Johan Serrato Acosta-->

<div class="table-responsive">
    <table class="table table-hover" id="table_empleados">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha De Registro</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tareas as $tarea) 
                <tr id="tarea_{{ $tarea->id }}">
                    <td>{{ $tarea->id }}</td>
                    <td>{{ $tarea->titulo }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>{{ $tarea->completado }}</td>

                    <!--<td>{{ $tarea->completado ? 'Completada' : 'Pendiente' }}</td>--> <!--linea de prueba no sirvio-->
                    <td>{{ $tarea->fechaRegistro->format('d/m/Y') }}</td> 
                    <td>
                        <ul class="flex_acciones">
                            <li>
                                <a title="Ver detalles de la tarea" href="{{ route('tareas.show', $tarea->id) }}" class="btn btn-success"><i class="bi bi-binoculars"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>  
                            </li>
                            <li>
                                <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST"> 
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar este registro?');"><i class="bi bi-trash"></i></button>
                                </form>
                            </li>
                            <!--<li> 
                                <a href="{{ route('tareas.toggleCompletado', $tarea->id) }}" class="btn btn-sm btn-{{ $tarea->completado ? 'secondary' : 'success' }}"> 
                                    {{ $tarea->completado ? 'Marcar como Pendiente' : 'Completar' }}
                                </a>
                            </li>-->
                            <li> 
    <!-- Marca la tarea como pendiente -->
    <!-- <form action="{{ route('tareas.toggleCompletado', $tarea->id) }}" method="POST" style="display: inline;"> 
        @csrf
        @method('PUT') 
        <button type="submit" class="btn btn-sm btn-{{ $tarea->completado ? 'secondary' : 'success' }}"> 
            {{ $tarea->completado ? 'Marcar como Pendiente' : 'Completar' }}
        </button>
    </form>-->
    <form action="{{ route('tareas.toggleCompletado', $tarea->id) }}" method="POST" style="display: inline;"> 
    @csrf
    @method('PUT') 
    <input type="hidden" name="completado" value="Completada"> <button type="submit" class="btn btn-sm btn-{{ $tarea->completado == 'Completada' ? 'secondary' : 'success' }}"> 
        {{ $tarea->completado == 'Completada' ? ' Marcar Pendiente' : 'Marcar Completar' }}
    </button>
</form>
</li>
                        </ul>
                    </td>
                </tr>
            @empty 
                <tr>
                    <td colspan="6" class="text-center">No hay tareas registradas.</td> 
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection

<!-- JOHAN SERRATO ACOSTA-->