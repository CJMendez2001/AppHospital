@extends('layouts.cuerpo')

@section('content')
<h1>Crear Especilidad</h1>

<div class="row">
    <div class="col">
        <form action="{{ route('especialidads.store') }}" method="POST" class="form-control">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Especialidad</label>
                <input type="text" class="form-control" id="nombre" placeholder="Especialidad" name="nombre">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('especialidads.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>

@endsection
