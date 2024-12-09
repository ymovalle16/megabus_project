@extends('layouts.plantillaAdmin')

@section('title', 'Dashboard')

@section('estilos')
{{-- <link rel="stylesheet" href="{{asset('CSS/dash.css')}}"> --}}
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

<div class="encabezado bg-light rounded shadow w-75 mx-auto text-center">
    <h3 class="p-1">Agregar Operador</h3>
</div>

<form action="{{ route('addOpe') }}" method="POST" class="form-control w-75 mx-auto p-5 pt-3 pb-3 mt-5">
    @csrf

    <div class="d-flex justify-content-between mt-3">
        <label for="name">Nombre completo <span class="text-danger">*</span></label>
        <input type="text" class="form-control w-50" id="name" name="name" required>
    </div>

    <div class="d-flex justify-content-between mt-3">
        <label for="identification">Número de identificación <span class="text-danger">*</span></label>
        <input type="number" class="form-control w-50" id="identification" name="identification" required>
    </div>

    <div class="d-flex justify-content-between mt-3">
        <label for="license-expiration">Fecha de vencimiento de la licencia <span class="text-danger">*</span></label>
        <input type="date" class="form-control w-50" id="license-expiration" name="license_expiration" required>
    </div>

    <div class="d-flex justify-content-between mt-3">
        <label for="bus_code">Código de bus<span class="text-danger">*</span></label>
        <div class="w-50">
            <select name="bus_code" class="form-control w-100" required>
                <option value="Sin código">Sin bus asignado</option>
                @foreach ($availableBuses as $bus)
                    <option value="{{ $bus->code }}">{{ $bus->code }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="w-50 mx-auto text-center m-4">
        <button type="submit" class="btn btn-md btn-success">Enviar</button>
        <a href="{{ route('operadores') }}" class="btn btn-md btn-danger">Volver</a>
    </div>
</form>


@endsection