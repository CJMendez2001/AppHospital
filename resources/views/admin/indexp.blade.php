@extends('layouts.cuerpo')

@section('content')
<h1>Listado de Pacientes</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
              </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        @if($user->usertype != 1)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>            
            </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endsection