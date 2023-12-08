@extends('layouts.cuerpo')

@section('content')

<h1>Especialidades</h1>
<a href="{{ route('especialidads.create') }}" class="btn btn-success">Crear</a>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Especialidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($especialidads as $especialidad)
        <tr>
            <td>{{ $especialidad->id }}</td>
            <td>{{ $especialidad->especialidad }}</td>
            <td>
                <form action="/especialidads/{{{$especialidad->id}}}" method="post">
                    @csrf
                    <a href="{{ route('especialidads.edit', $especialidad->id) }}" class="btn btn-primary">Editar</a>
                    <a href="/especialidads/{{$especialidad->id}}show" class="btn btn-warning">Borrar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection