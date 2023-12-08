
@extends('layouts.app')

@section('content')
    <style>
        .cita-pasada {
            background-color: green;
        }

        .cita-futura {
            background-color: red;
        }
    </style>

    <h1>Lista de Consultas</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Médico</th>
                <th>Paciente</th>
                <th>Fecha y Hora</th>
            </tr>
        </thead>
        <tbody>
            @isset($consultas)
                @foreach($consultas as $consulta)
                    <tr class="{{ $consulta->fecha_hora < $now ? 'cita-pasada' : 'cita-futura' }}">
                        <td>{{ $consulta->id }}</td>
                        <td>{{ $consulta->idmedico }}</td>
                        <td>{{ $consulta->idpaciente }}</td>
                        <td>{{ $consulta->fecha_hora }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No hay consultas disponibles</td>
                </tr>
            @endisset
        </tbody>
    </table>
@endsection
