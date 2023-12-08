<h1>Eliminar Especialidad</h1>

<div class="row">
    <div class="col">
        <form action="{{ route('especialidads.destroy', $especialidadEliminado->id) }}" class="form-control" method="POST">
            @csrf
            @method('DELETE')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" value="{{ $especialidadEliminado->especialidad}}" name="nombre" readonly>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="{{ route('especialidads.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
</div>
