@extends('layouts.cuerpo')

@section('content')
<h1>Generos</h1>
<a href="{{ route('generos.create') }}" class="btn btn-success">Crear</a>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Genero</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($generos as $genero)
        <tr>
            <td>{{ $genero->id }}</td>
            <td>{{ $genero->genero }}</td>
            <td>
                <form action="/generos/{{{$genero->id}}}" method="post">
                    @csrf
                    <a href="{{ route('generos.edit', $genero->id) }}" class="btn btn-primary">Editar</a>
                    <a href="/generos/{{$genero->id}}show" class="btn btn-warning">Borrar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
