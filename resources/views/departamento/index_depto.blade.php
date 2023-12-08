<h1>DEPARTAMENTOS</h1>
<a href="{{ route('departamentos.create') }}" class="btn btn-success">Crear</a>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre Departamento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departamentos as $departamento)
        <tr>
            <td>{{ $departamento->id }}</td>
            <td>{{ $departamento->departamento }}</td>
            <td>
                <form action="/departamentos/{{{$departamento->id}}}" method="post">
                    @csrf
                    <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-primary">Editar</a>
                    <a href="/departamentos/{{$departamento->id}}show" class="btn btn-warning">Borrar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

