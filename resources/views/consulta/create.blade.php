@extends('layouts.app')

@section('title', 'Crear Consulta')

@section('content')
    <h1>Crear Nueva Consulta</h1>

    <form action="{{ route('consultas.store') }}" method="post" onsubmit="return validarFechaHora()">
        @csrf
        <div class="form-group">
            <label for="idmedico">Médico:</label>
            <select name="idmedico" id="idmedico" class="form-control">
                <!-- Aquí debes cargar la lista de médicos desde tu controlador -->
                @foreach($medicos as $medico)
                    <option value="{{ $medico->id }}">{{ $medico->nombre }} {{ $medico->apellido }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idpaciente">Paciente:</label>
            <!-- Pasa directamente el ID del paciente autenticado -->
            <input type="hidden" name="idpaciente" value="{{ Auth::id() }}">
            <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
        </div>

        <div class="form-group">
            <label for="fecha_hora">Fecha y Hora:</label>
            <input type="datetime-local" name="fecha_hora" id="fecha_hora" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Consulta</button>
    </form>

    <script>
        function validarFechaHora() {
            var fechaHora = document.getElementById('fecha_hora').value;

         
            var fechaSeleccionada = new Date(fechaHora);
            var horaSeleccionada = fechaSeleccionada.getHours();

            if (horaSeleccionada < 8 || horaSeleccionada >= 18) {
                alert('La consulta solo se puede agendar entre las 8 am y las 6 pm.');
                return false; 
            }


            return true; 
        }
    </script>
@endsection
