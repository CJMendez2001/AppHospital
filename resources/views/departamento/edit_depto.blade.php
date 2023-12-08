<h1>Editar departamento</h1>

<div class="row">
    <div class="col">
        <form action="{{ route('departamentos.update', $departamento->id) }}" method="POST" class="form-control">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Departamento</label>
                <input type="text" class="form-control" id="nombre" value="{{ $departamento->departamento }}" name="nombre">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('departamentos.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>


