<form action="{{ route('tareas.store') }}" method="POST">
    @csrf 
    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <input type="text" name="descripcion" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="completado" class="form-control" required>
        <option value=""></option>
            <option value="Completada">Completada</option>
            <option value="Pendiente">Pendiente</option>
        </select>
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary btn_add">
            Registrar Tarea
        </button>
    </div>
</form> <!-- JOHAN SERRATO ACOSTA-->