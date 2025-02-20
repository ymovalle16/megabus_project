@extends('layouts.plantillaAdmin')

@section('title', 'Dashboard')

@section('estilos')
{{-- <link rel="stylesheet" href="{{ asset('CSS/dash.css') }}"> --}}
@endsection

@section('content')

<!-- Mostrar errores si existen -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('success'))
<div class="alert alert-success" style="width: 100%; margin: 0 auto; margin-bottom: 10px;">
    {{ session('success') }}
</div>
@endif

<div class="encabezado bg-light rounded shadow w-50 mx-auto text-center d-flex">
    <div class="mx-auto w-75">
        <h3>Asignación de Rutas</h3>
        <p class="fechaMañana"></p>
        <div class="d-flex justify-content-center mb-4">
            @foreach ($prefijosDias as $prefijo => $diaSemana)
            <a href="{{ route('indexA', ['dia' => $prefijo]) }}" class="btn btn-secondary mx-1">{{ ucfirst($diaSemana) }}</a>
            @endforeach
        </div>
    </div>
</div>

<div class="container p-2">
    <form action="{{ route('asignar_rutas') }}" method="POST">
        @csrf
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ruta</th>
                    <th>Operador</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rutas as $ruta)
                <tr>
                    <th>{{ $ruta->name }}</th> <!-- Nombre de la ruta -->
                    <td>
                        <select name="operadores[{{ $ruta->id }}]" class="form-select">
                            <option value="" disabled selected>Selecciona Un Operador</option>
                            @foreach ($operadores as $operador)
                            <option value="{{ $operador->id }}" {{ $ruta->operador_id == $operador->id ? 'selected' : '' }}>
                                {{ $operador->name }}
                            </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Asignaciones</button>
        </div>
    </form>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function() {
        const fechaHoy = new Date();
        fechaHoy.setDate(fechaHoy.getDate() + 1); // Sumar un día para obtener la fecha de mañana

        // Configurar las opciones para mostrar la fecha formateada
        const opciones = {
            weekday: 'long', // día de la semana completo
            day: 'numeric', // día del mes como número
            month: 'long', // mes completo
            year: 'numeric' // año completo
        };

        // Obtener la fecha formateada
        const fechaFormateada = fechaHoy.toLocaleDateString('es-ES', opciones);

        // Asignar la fecha formateada a los elementos correspondientes
        const elementosFecha = document.querySelectorAll('.fechaMañana');
        elementosFecha.forEach(elemento => {
            elemento.textContent = `${fechaFormateada}`;
        });

        console.log("La fecha para mañana es: " + fechaFormateada); // Depuración de la fecha
    });
</script>

@endsection
