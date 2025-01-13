@extends('layouts.plantillaAdmin')

@section('title', 'Tablas')

@section('estilos')
<link rel="stylesheet" href="{{asset('CSS/tabs.css')}}">
@endsection

@section('content')


<div class="encabezado bg-light rounded shadow w-75 mx-auto text-center ">
    <h3 class="p-1">Programación </h3>
</div>

<div class="conte d-flex">

    <div class="contenedor d-flex">

        <div class="container1 d-flex mt-5 mx-auto">
    
            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light bg-primary">Altagracia Partida Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0 bg-primary">Tabla</td>
                    <td class="text-light p-0 bg-primary">Barrio</td>
                    <td class="text-light p-0 bg-primary">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0 ">4:26</th>
                    <td class="p-0">4:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">5:30</td>
                    <td class="p-0">6:02</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">6:34</td>
                    <td class="p-0">7:06</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">7:38</td>
                    <th class="inifin p-0 ">8:10</th>
                </tr>
        
                <!-- Fila de una sola columna que diga "Pausado UTP" -->
                <tr>
                    <th colspan="3" class="amarillo p-0 ">Pausado UTP</th>
                </tr>
        
                <!-- Dos filas con tres columnas en blanco -->
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0"></td>
                    <td class="p-0">8:40</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">9:08</td>
                    <td class="p-0">9:35</td>
                </tr>
        
                <!-- Dos filas de una sola columna en blanco -->
                <tr>
                    <td colspan="3" class="pre">PREGUNTAR AL FACILITADOR SI DEJA EL CARRO EN CUBA O EN PATIOS</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0 ">RETOMA ALTAGRACIA</th>
                </tr>
        
                <!-- Cinco filas con tres columnas en blanco -->
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0"></td>
                    <th class="inifin p-0 ">16:01</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">16:35</td>
                    <td class="p-0">17:07</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">17:39</td>
                    <td class="p-0">18:11</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">18:43</td>
                    <td class="p-0">19:15</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0 ">19:47</th>
                    <td class="p-0"></td>
                </tr>
            </table>
    
        </div>
    
        <div class="container2 d-flex mt-5 mx-auto">
    
            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fecha p-1 w-50">sábado, 11 de Enero de 2025</td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Partida</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Altagracia</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:26 A 9:35 Y 16:01 A 19:47</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Edwin Quintero</p>
                </td>
                </tr>
    
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">El lunes no tiene que hacer pausado esta tabla.</td></tr>
                                    <tr><td colspan="2" class="p-1">Preguntar si llevar el carro al patio o lo deja en Cuba</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection
