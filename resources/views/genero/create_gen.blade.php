<h1>Crear Genero</h1>

<div class="row">
    <div class="col">
        <form action="{{ route('generos.store') }}" method="POST" class="form-control">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Genero</label>
                <input type="text" class="form-control" id="nombre" placeholder="Genero" name="nombre">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('generos.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>

