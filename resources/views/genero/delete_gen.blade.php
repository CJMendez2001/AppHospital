<h1>Eliminar Genero</h1>

<div class="row">
    <div class="col">
        <form action="{{ route('generos.destroy', $generoEliminado->id) }}" class="form-control" method="POST">
            @csrf
            @method('DELETE')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" value="{{ $generoEliminado->genero}}" name="nombre" readonly>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="{{ route('generos.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
</div>
