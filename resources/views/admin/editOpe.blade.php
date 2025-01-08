@extends('layouts.plantillaAdmin')
@section('title', 'Editar información de operador')
@section('estilos')
{{-- <link rel="stylesheet" href="{{asset('CSS/ingEdi.css')}}"> --}}
@endsection
@section('content')
    <div class="encabezado bg-light rounded shadow w-75 mx-auto text-center">
        <h3 class="p-1">Editar Operador</h3>
    </div>

    @if(session('success'))
        <div class="alert alert-success mt-3" style="width: 90%; margin: 0 auto">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger mt-3" style="width: 90%; margin: 0 auto">
            <ul>
                @foreach ($errors->all() as $error)
                <li style="list-style: none;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- { --}}
    <form action="{{route ('actualizarOperador', $user->id)}}" method="POST" class="form-control mx-auto mt-5 mb-5 shadow" id="formulario">
        @csrf
        @method('PUT')
        <div class="form-group row justify-content-between w-75 mx-auto mt-3">
            <label class="col-form-label col-sm-4 col-md-4 col-lg-3" for="name">Nombre</label>
            <div class="col-sm-8 col-md-8 col-lg-9">
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
            </div>
        </div>

        <div class="form-group row justify-content-between w-75 mx-auto mt-3">
            <label class="col-form-label col-sm-4 col-md-4 col-lg-3" for="name">Fecha de vencimiento de licencia</label>
            <div class="col-sm-8 col-md-8 col-lg-9">
                <input type="date" id="license_expiration" name="license_expiration" class="form-control" value="{{ $user->license_expiration }}">
            </div>
        </div>

        @if($user->bus_code)
        <!-- Operador tiene bus asignado -->
        <div class="form-group row justify-content-between w-75 mx-auto mt-3">
            <label class="col-form-label col-sm-4 col-md-4 col-lg-3" for="change_bus">¿Desea cambiar el bus?</label>
            <div class="col-sm-8 col-md-8 col-lg-9">
                <select id="change_bus" name="change_bus" class="form-control">
                    <option value="no">No</option>
                    <option value="yes">Sí</option>
                </select>
            </div>
        </div>
        <div id="current_bus_status" class="form-group row justify-content-between w-75 mx-auto" style="display: none;">
            <label class="col-form-label col-sm-4 col-md-4 col-lg-3" for="current_bus_status_id">Estado del bus actual</label>
            <div class="col-sm-8 col-md-8 col-lg-9">
                <select id="current_bus_status_id" name="current_bus_status_id" class="form-control">
                    @foreach ($statusBus as $statu)
                        <option value="{{ $statu->id }}">{{ $statu->status_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div id="new_bus_code" class="form-group row justify-content-between w-75 mx-auto" style="display: none;">
            <label class="col-form-label col-sm-4 col-md-4 col-lg-3" for="new_bus_code">Nuevo bus</label>
            <div class="col-sm-8 col-md-8 col-lg-9">
                <select id="new_bus_code" name="new_bus_code" class="form-control">
                    <option value="">Sin bus asignado</option>
                    @foreach ($availableBuses as $bus)
                        <option value="{{ $bus->code }}">{{ $bus->code }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @else
        <!-- Operador no tiene bus asignado -->
        <div class="form-group row justify-content-between w-75 mx-auto mt-3">
            <label class="col-form-label col-sm-4 col-md-4 col-lg-3" for="new_bus_code">Asignar un bus</label>
            <div class="col-sm-8 col-md-8 col-lg-9">
                <select id="new_bus_code" name="new_bus_code" class="form-control">
                    <option value="">Sin bus</option>
                    @foreach ($availableBuses as $bus)
                        <option value="{{ $bus->code }}">{{ $bus->code }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @endif
        <div class="form-group row justify-content-between w-75 mx-auto mt-3">
            <label class="col-form-label col-sm-4 col-md-4 col-lg-3" for="">Estado</label>
            <div class="col-sm-8 col-md-8 col-lg-9">
                <select name="status" class="form-control">
                    @foreach ($status as $state)
                        <option value="{{ $state->id }}">{{ $state->status_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="w-50 mx-auto text-center m-4">
            <button type="submit" class="btn btn-md btn-success">Enviar</button>
            <a href="{{ route('operadores') }}" class="btn btn-md btn-danger">Volver</a>
        </div>
    </form>
    
<script>

document.addEventListener('DOMContentLoaded', function () {
    const changeBusSelect = document.getElementById('change_bus');
    const currentBusStatusDiv = document.getElementById('current_bus_status');
    const newBusCodeDiv = document.getElementById('new_bus_code');

    if (changeBusSelect) {
        changeBusSelect.addEventListener('change', function () {
            if (this.value === 'yes') {
                currentBusStatusDiv.style.display = 'flex';
                newBusCodeDiv.style.display = 'flex';
            } else {
                currentBusStatusDiv.style.display = 'none';
                newBusCodeDiv.style.display = 'none';
            }
        });
    }
});

</script>

@endsection
