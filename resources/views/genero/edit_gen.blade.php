<h1>Editar genero</h1>

<div class="row">
    <div class="col">
        <form action="{{ route('generos.update', $genero->id) }}" method="POST" class="form-control">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Genero</label>
                <input type="text" class="form-control" id="nombre" value="{{ $genero->genero }}" name="nombre">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('generos.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>


