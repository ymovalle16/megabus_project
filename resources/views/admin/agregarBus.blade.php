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
    <h3 class="p-1">Agregar Bus</h3>
</div>

<form action="{{ route('addBus')}}" method="POST" class="form-control w-75 mx-auto p-5 pt-3 pb-3 mt-5">
    @csrf

    <div class="d-flex justify-content-between mt-3">
        <label for="name">Código <span class="text-danger">*</span></label>
        <input type="text" class="form-group w-50" id="code" name="code" required>
    </div>

    <div class="w-50 mx-auto text-center m-4">
        <button type="submit" class="btn btn-md btn-success">Enviar</button>
        <a href="{{ route('buses') }}" class="btn btn-md btn-danger">Volver</a>
    </div>
</form>


@endsection