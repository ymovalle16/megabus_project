@extends('layouts.plantillaAdmin')

@section('title', 'Tablas')

@section('estilos')
<link rel="stylesheet" href="{{asset('CSS/tabs.css')}}">
@endsection

@section('content')


<div class="encabezado bg-light rounded shadow w-75 mx-auto text-center ">
    <h3 class="p-1">Programación</h3>
</div>

<div class="text-center mt-4">
    <button class="btn btn-primary" onclick="mostrarTablas('lunes')">Lunes</button>
    <button class="btn btn-primary" onclick="mostrarTablas('martes')">Martes</button>
    <button class="btn btn-primary" onclick="mostrarTablas('miercoles')">Miércoles</button>
    <button class="btn btn-primary" onclick="mostrarTablas('jueves')">Jueves</button>
    <button class="btn btn-primary" onclick="mostrarTablas('viernes')">Viernes</button>
    <button class="btn btn-primary" onclick="mostrarTablas('sabado')">Sábado</button>
    <button class="btn btn-primary" onclick="mostrarTablas('domingo')">Domingo</button>
</div>


<div class="conte d-flex" id="tablasContainer">
    <div class="tabla lunes" style="display: none;">

        <div class="container1 d-flex mt-5 mx-auto" >

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Altagracia Partida Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
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
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla Partida</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Altagracia Tabla 1</p>
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



    <div class="tabla lunes "  style="display: none;">

        <div class="container1 d-flex mt-5 mx-auto" >

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Cerritos Partida Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0 ">4:40</th>
                    <td class="p-0">5:12</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">5:43</td>
                    <td class="p-0">6:15</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">6:46</td>
                    <td class="p-0">7:18</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">7:49</td>
                    <th class="inifin p-0 ">8:21</th>
                </tr>
        
                <!-- Fila de una sola columna que diga "Pausado UTP" -->
                <tr>
                    <th colspan="3" class="amarillo p-0 ">Pausado Cerritos Ingresa Con Carro</th>
                </tr>
        
                <!-- Dos filas con tres columnas en blanco -->
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0"></td>
                    <td class="p-0">8:49</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">9:28</td>
                    <td class="p-0">10:00</td>
                </tr>
        
                
                <tr>
                    <th colspan="3" class="text-light p-0 ">RETOMA CERRITOS PM</th>
                </tr>
        
                <!-- Cinco filas con tres columnas en blanco -->
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">15:47</th>
                    <td class="p-0 ">16:19</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">16:48</td>
                    <td class="p-0">17:19</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">17:51</td>
                    <td class="p-0">18:22</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">18:54</td>
                    <td class="p-0">19:25</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0 ">19:57</th>
                    <td class="p-0"></td>
                </tr>
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla Partida</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Cerritos Tabla 3</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:40 A 10:00 Y 15:47 A 19:57</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Alexander Rojo</p>
                </td>
                </tr>

                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Ingresa con su carro a realizar el pausado de cerritos-6 y por favor le reporta al facilitador de megabus el cambio de carro por 1 vuelta.</td></tr>
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

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Guayacanes Partida Lunes</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tablalunes" -->
                <tr>
                    <td class="text-light p-0">tablalunes</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0 ">5:08</th>
                    <td class="p-0">5:23</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">5:38</td>
                    <td class="p-0">5:53</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">6:08</td>
                    <td class="p-0">6:23</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">6:38</td>
                    <td class="p-0 ">6:53</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">7:08</td>
                    <td class="p-0 ">7:23</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">7:38</td>
                    <td class="p-0 ">7:53</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">8:08</td>
                    <th class="inifin p-0 ">8:23</th>
                </tr>
        
                <!-- Fila de una sola columna que diga "Pausado UTP" -->
                <tr>
                    <th colspan="3" class="amarillo p-0 ">Pausados tarde</th>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0 ">Montelibano</th>
                </tr>
        
                <!-- Dos filas con tres columnas en blanco -->
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0"></td>
                    <td class="p-0">14:50</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">15:05</td>
                    <td class="p-0">15:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">15:35</td>
                    <td class="p-0">15:50</td>
                </tr>
        
                <!-- Dos filas de una sola columna en blanco -->
                <tr>
                    <th colspan="3" class="text-light p-0">Guayacanes</th>
                </tr>
        
                <!-- Cinco filas con tres columnas en blanco -->
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0"></td>
                    <td class="p-0 ">16:09</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">16:24</td>
                    <td class="p-0">16:39</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">16:54</td>
                    <td class="p-0">17:09</td>
                </tr>

                <tr>
                    <th colspan="3" class="text-light p-0">Morelia</th>
                </tr>
        
                <!-- Cinco filas con tres columnas en blanco -->
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0"></td>
                    <td class="p-0 ">17:30</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">17:46</td>
                    <td class="p-0">18:02</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">18:18</td>
                    <td class="p-0">18:34</td>
                </tr>

                <tr>
                    <th colspan="3" class="text-light p-0">Mercasa</th>
                </tr>
        
                <!-- Cinco filas con tres columnas en blanco -->
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0"></td>
                    <td class="p-0 ">18:54</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">19:12</td>
                    <td class="p-0">19:27</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">19:42</td>
                    <td class="p-0">19:57</td>
                </tr>
                
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla Partida</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="pad p-1 m-0">Guayacanes Tabla 6 AM</p>
                        <p class="pad p-1 m-0">Pausados PM</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">5:08 A 8:23 Y 14:50 A 19:57</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Francisco Arias</p>
                </td>
                </tr>

                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Al terminar la tabla en la mañana, llevar el carro al patio</td></tr>
                                    <tr><td colspan="2" class="p-1">En la tarde no realiza tabla , solo realiza PAUSADOS</td></tr>
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

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">La Virginia Hábil AM</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">LA Virginia</td>
                    <td class="text-light p-0">CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <th class="inifin p-0 ">5:04</th>
                    <td class="p-0">5:49</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">6:34</td>
                    <td class="p-0">7:19</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">8:04</td>
                    <td class="p-0">8:49</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">9:32</td>
                    <th class="inifin p-0 ">10:17</th>
                </tr>
        
                <!-- Fila de una sola columna que diga "Pausado UTP" -->
                <tr>
                    <th colspan="3" class="pre p-0 ">PREGUNTAR AL FACILITADOR SI DEJA EL CARRO EN CUBA O EN PATIOS</th>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0 ">2500 Partida Hábil</th>
                </tr>
        
                <!-- Dos filas con tres columnas en blanco -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0"></td>
                    <th class="inifin p-0">15:49</th>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">16:06</td>
                    <td class="p-0">16:20</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">16:35</td>
                    <td class="p-0">16:49</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">17:03</td>
                    <td class="p-0">17:17</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">17:31</td>
                    <td class="p-0">17:45</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">17:59</td>
                    <td class="p-0">18:13</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">18:27</td>
                    <td class="p-0">18:41</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">18:55</td>
                    <td class="p-0">19:09</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">19:23</td>
                    <td class="p-0">19:37</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <th class="inifin p-0">19:51</th>
                    <td class="p-0"></td>
                </tr>
                
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla Partida</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="pad p-1 m-0">Virginia Tabla 4 AM</p>
                        <p class="pad p-1 m-0">2500 Tabla 5 PM</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">5:04 A 10:17 Y 15:49 A 19:51</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">William Castañeda</p>
                </td>
                </tr>

                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">En la mañana realiza VIRGINIA 4 y en la tarde realiza 2500.</td></tr>
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


    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Ruta 29 Mirador partida</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Est. Turin</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0 ">5:00</th>
                    <td class="p-0">5:22</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">5:44</td>
                    <td class="p-0">6:06</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">6:28</td>
                    <td class="p-0">6:50</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">7:12</td>
                    <td class="p-0 ">7:34</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">7:56</td>
                    <th class="inifin p-0 ">8:18</th>
                </tr>
        
                <!-- Fila de una sola columna que diga "Pausado UTP" -->
                <tr>
                    <th colspan="3" class="pre p-0 ">PREGUNTAR AL FACILITADOR SI DEJA EL CARRO EN CUBA O EN PATIOS</th>
                </tr>
        
                <!-- Dos filas con tres columnas en blanco -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Est. Turin</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0"></td>
                    <th class="inifin p-0">15:21</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">15:45</td>
                    <td class="p-0">16:09</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">16:33</td>
                    <td class="p-0">16:57</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">17:21</td>
                    <td class="p-0">17:45</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">18:11</td>
                    <td class="p-0">18:37</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">19:03</td>
                    <td class="p-0">19:29</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">19:55</td>
                    <td class="p-0">20:20</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">20:46</th>
                    <td class="p-0"></td>
                </tr>
                
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla Partida</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="pad p-1 m-0">Mirador Tabla 3</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">5:00 A 8:18 Y 15:21 A 20:46</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Diego Garcia</p>
                </td>
                </tr>

                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">El lunes no tiene tiene que hacer pausado esta tabla.</td></tr>
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


    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="inifin "><div class="d-flex"><div class="w-75 text-start">Pausados Lunes</div> <div class="w-25 text-center">3</div></div></th>
                </tr>

                <tr>
                    <th colspan="3" class="pre p-0"><strong>Mañana</strong></th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="azulc p-0"><strong>Ruta</strong></td>
                    <td class="azulc p-0"><strong>Barrio</strong></td>
                    <td class="azulc p-0"><strong>CUBA</strong></td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">UTP</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 "></td>
                    <td class="p-0">8:40</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 ">9:08</td>
                    <td class="p-0">9:35</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Puerto Caldas</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 "></td>
                    <td class="p-0">10:06</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 ">10:47</td>
                    <td class="p-0">11:32</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Altagracia</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 "></td>
                    <td class="p-0">13:00</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">13:30</td>
                    <td class="p-0">14:00</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Miraflores</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 "></td>
                    <td class="p-0">15:01</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 ">15:16</td>
                    <td class="p-0">15:31</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 ">15:46</td>
                    <td class="p-0">16:03</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Cerritos</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0 "></td>
                    <td class="p-0">16:24</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0 ">16:55</td>
                    <td class="p-0">17:26</td>
                </tr> 
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla Partida</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="pad p-1 m-0">Pausados 3</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">8:40 A 14:00 Y 15:01 A 17:26</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">0</p>
                </td>
                </tr>

                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Recibir y entregar el carro al que le va a realizar el pausado</td></tr>
                                    <tr><td colspan="2" class="p-1">Para las 2 vueltas de altagracia de 11:58 a 14:00, en cuba encuentra carro disponible, llamar al jefe operativo y confirmar.</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora de los carros en que realiza el pausado</td></tr>
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

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="inifin "><div class="d-flex"><div class="w-75 text-start">Pausados Lunes</div> <div class="w-25 text-center">1</div></div></th>
                </tr>

                <tr>
                    <th colspan="3" class="amarillo p-0"><strong>Mañana</strong></th>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Pausado Miraflores</th>
                </tr>
        
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 "></td>
                    <td class="p-0">6:57</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 ">7:14</td>
                    <td class="p-0">7:32</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 ">7:46</td>
                    <td class="p-0">8:01</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Pausado Guayacanes</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 "></td>
                    <td class="p-0">8:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 ">8:23</td>
                    <td class="p-0">8:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 ">8:53</td>
                    <td class="p-0">9:08</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Pausado Montelibano</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0 "></td>
                    <td class="p-0">9:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0 ">9:35</td>
                    <td class="p-0">9:50</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0 ">10:05</td>
                    <td class="p-0">10:20</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Pausado Morelia</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 "></td>
                    <td class="p-0">10:34</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 ">10:50</td>
                    <td class="p-0">11:06</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 ">11:22</td>
                    <td class="p-0">11:38</td>
                </tr>
                <tr>
                    <th colspan="3" class="amarillo p-0">Tarde</th>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Pausado Virginia</th>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0 "></td>
                    <td class="p-0">13:21</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0 ">14:04</td>
                    <td class="p-0">14:46</td>
                </tr> 
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0 ">15:36</td>
                    <td class="p-0">16:23</td>
                </tr> 
                <tr>
                    <th colspan="3" class="text-light p-0">Pausado UTP</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 "></td>
                    <td class="p-0">17:02</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 ">17:31</td>
                    <td class="p-0">18:01</td>
                </tr> 
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla Partida</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="pad p-1 m-0">Pausados 1</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">6:57 A 11:38 Y 13:21 A 18:01</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Juan Miguel Rivillas</p>
                </td>
                </tr>

                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Recibir y entregar el carro al que le va a realizar el pausado</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora de los carros en que realiza el pausado</td></tr>
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

    
    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="inifin "><div class="d-flex"><div class="w-75 text-start">Pausados Lunes</div> <div class="w-25 text-center">2</div></div></th>
                </tr>

                <tr>
                    <th colspan="3" class="pre p-0"><strong>Mañana</strong></th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="azulc p-0"><strong>Ruta</strong></td>
                    <td class="azulc p-0"><strong>Barrio</strong></td>
                    <td class="azulc p-0"><strong>CUBA</strong></td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Guayabal 2</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 "></td>
                    <td class="p-0">6:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 ">6:58</td>
                    <td class="p-0">7:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 ">7:18</td>
                    <td class="p-0">7:28</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Guayabal 1</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 "></td>
                    <td class="p-0">7:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">7:48</td>
                    <td class="p-0">7:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">8:08</td>
                    <td class="p-0">8:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">8:28</td>
                    <td class="p-0">8:38</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Belmonte</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 "></td>
                    <td class="p-0">9:28</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">9:43</td>
                    <td class="p-0">9:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">10:13</td>
                    <td class="p-0">10:28</td>
                </tr>
                <tr>
                    <th colspan="3" class="amarillo p-0">Pausados Tarde</th>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Guayabal 2</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 "></td>
                    <td class="p-0">15:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 ">15:38</td>
                    <td class="p-0">15:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 ">15:58</td>
                    <td class="p-0">16:08</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0">Guayabal 1</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 "></td>
                    <td class="p-0">16:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">16:28</td>
                    <td class="p-0">16:38</td>
                </tr> 
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">16:48</td>
                    <td class="p-0">16:58</td>
                </tr> 
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">17:08</td>
                    <td class="p-0">17:18</td>
                </tr> 
                <tr>
                    <th colspan="3" class="text-light p-0">Belmonte</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 "></td>
                    <td class="p-0">18:05</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">18:20</td>
                    <td class="p-0">18:35</td>
                </tr> 
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">18:50</td>
                    <td class="p-0">19:05</td>
                </tr> 
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 ">19:20</td>
                    <td class="p-0">19:35</td>
                </tr> 
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla Partida</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="pad p-1 m-0">Pausados 2</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">6:48 A 10:28 Y 15:28 A 19:35</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Cesar Osorio</p>
                </td>
                </tr>

                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Recibir y entregar el carro al que le va a realizar el pausado</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora de los carros en que realiza el pausado</td></tr>
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

    <div class="tabla lunes">

        <div class="container1 mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Disponible Hábil AM</th>
                </tr>
                
                <tr>
                    <td colspan="3" class="pre p-0 ">Disponible en patio a las 4:30</td>
                </tr>
                <tr>
                    <th colspan="3" class="pre p-0 ">Adicionales en el viajero a las 5:00 AM</th>
                </tr>
                <tr>
                    <td colspan="3" class="pre p-0 ">Disponible hasta la 1 PM</td>
                </tr>
            </table>

            <table class="table1 mx-auto table table-bordered border-dark text-center mt-2">
                <!-- Cinco filas con tres columnas en blanco -->
                <tr>
                    <th colspan="3" class="text-light p-0 ">Puerto Caldas</th>
                </tr>
                
                <tr>
                    <td class="p-0">3</td>
                    <th class="p-0"></th>
                    <td class="p-0 ">10:06</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">10:47</td>
                    <td class="p-0">11:32</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0 ">Altagracia</th>
                </tr>
                
                <tr>
                    <td class="p-0">1</td>
                    <th class="p-0"></th>
                    <td class="p-0 ">11:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">12:29</td>
                    <td class="p-0">13:00</td>
                </tr>
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla AM</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Disponible AM</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:30 AM A 1:00 PM + NOV</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Anderson Gordillo</p>
                </td>
                </tr>

                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Si no tiene tabla asignada, dirigirse al viajero a las 5 am a realizar adicionales.</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Si se presenta alguna novedad con carro o compañero debe seguir hasta las 14:30</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                    <tr>
                                        <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                        <td colspan="1" class="inifin p-0">Jorge Yamid Hoyos</td>
                                    </tr>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Disponible Hábil PM</th>
                </tr>
                
                <tr>
                    <td colspan="3" class="pre p-0 ">Disponible de 1 PM a 9 PM</td>
                </tr>
                
            </table>

            <table class="table1 mx-auto table table-bordered border-dark text-center mt-2">
                <!-- Cinco filas con tres columnas en blanco -->
                <tr>
                    <th colspan="3" class="text-light p-0 ">Altagracia</th>
                </tr>
                
                <tr>
                    <td class="p-0">1</td>
                    <th class="p-0"></th>
                    <td class="p-0 ">13:00</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">13:30</td>
                    <td class="p-0">14:00</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0 ">Miraflores</th>
                </tr>
                
                <tr>
                    <td class="p-0">3</td>
                    <th class="p-0"></th>
                    <td class="p-0 ">15:01</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">15:16</td>
                    <td class="p-0">15:31</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">15:46</td>
                    <td class="p-0">16:03</td>
                </tr>
                <tr>
                    <th colspan="3" class="text-light p-0 ">Cerritos</th>
                </tr>
                
                <tr>
                    <td class="p-0">6</td>
                    <th class="p-0"></th>
                    <td class="p-0 ">16:24</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">16:55</td>
                    <td class="p-0">17:26</td>
                </tr>
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                <th class="inifin p-0">Tabla PM</th>
                <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Disponible PM</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">1:00 PM A 9:00 PM + NOV</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Jorge Yamid Hoyos</p>
                </td>
                </tr>

                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Estar pendiente con el facilitador de cambios de carro o realizar adicionales</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Si se presenta alguna novedad con un carro o compañero, debe seguir hasta el cierre.</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                    <tr>
                                        <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                        <td colspan="1" class="inifin p-0">Anderson Gordillo</td>
                                    </tr>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Belmonte AM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0 ">4:43</th>
                    <td class="p-0">4:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">5:13</td>
                    <td class="p-0">5:28</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">5:43</td>
                    <td class="p-0">5:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">6:13</td>
                    <td class="p-0">6:28</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">6:43</td>
                    <td class="p-0">6:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">7:13</td>
                    <td class="p-0">7:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">7:43</td>
                    <td class="p-0">7:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">8:13</td>
                    <td class="p-0">8:28</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">8:43</td>
                    <td class="p-0">8:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">9:13</td>
                    <th class="inifin p-0">9:28</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">9:43</th>
                    <th class="inifin p-0">9:58</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">10:13</th>
                    <th class="inifin p-0">10:28</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">10:43</td>
                    <td class="p-0">10:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">11:13</td>
                    <td class="p-0">11:28</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">11:43</td>
                    <td class="p-0">11:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">12:13</td>
                    <td class="p-0">12:28</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">12:43</td>
                    <td class="p-0">12:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">13:13</td>
                    <td class="p-0">13:28</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">13:43</td>
                    <td class="p-0">13:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">14:13</td>
                    <th class="inifin p-0 ">14:28</th>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla am</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Belmonte Tabla 1</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:43 A 14:28</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Ferney Medina</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">9:28 A 10:28</th>
                    <td class="inifin p-0">Cesar Mejia</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Llegar con anticipacion al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Cesar Mejia</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Belmonte PM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="p-0 "></th>
                    <th class="inifin p-0">14:28</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">14:43</td>
                    <td class="p-0">14:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">15:13</td>
                    <td class="p-0">15:28</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">15:48</td>
                    <td class="p-0">16:03</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">16:18</td>
                    <td class="p-0">16:33</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">16:48</td>
                    <td class="p-0">17:03</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">17:18</td>
                    <td class="p-0">17:33</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">17:50</td>
                    <th class="inifin p-0">18:05</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">18:20</th>
                    <th class="inifin p-0">18:35</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">18:50</th>
                    <th class="inifin p-0">19:05</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">19:20</th>
                    <th class="inifin p-0">19:35</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">19:50</td>
                    <td class="p-0">20:05</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">20:20</td>
                    <td class="p-0">20:35</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">20:50</td>
                    <td class="p-0">21:05</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">21:20</td>
                    <td class="p-0">21:35</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">21:50</td>
                    <td class="p-0">22:05</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">22:20</td>
                    <td class="p-0">22:35</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">22:50</td>
                    <td class="p-0">23:05</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">23:20</td>
                    <td class="p-0">23:35</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">23:50</th>
                    <td class="p-0"></td>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Belmonte Tabla 1</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">14:28 A 23:50</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Cesar Mejia</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">18:35 A 19:35</th>
                    <td class="inifin p-0">Cesar Mejia</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Al llegar al patio en la noche , entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Ferney Medina</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light "><div class="d-flex"><div class="w-25 text-center">1</div> <div class="w-75 text-center">Guayabal AM</div></div></th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Estación CABLE</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0 ">4:48</th>
                    <td class="p-0">4:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">5:08</td
                        
                        
                        >
                    <td class="p-0">5:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">5:28</td>
                    <td class="p-0">5:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">5:48</td>
                    <td class="p-0">5:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">6:08</td>
                    <td class="p-0">6:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">6:28</td>
                    <td class="p-0">6:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">6:48</td>
                    <td class="p-0">6:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">7:08</td>
                    <td class="p-0">7:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">7:28</td>
                    <th class="inifin p-0">7:38</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">7:48</th>
                    <th class="inifin p-0">7:58</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">8:08</th>
                    <th class="inifin p-0">8:18</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">8:28</th>
                    <th class="inifin p-0">8:38</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">8:48</td>
                    <td class="p-0">8:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">9:08</td>
                    <td class="p-0">9:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">9:28</td>
                    <td class="p-0">9:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">9:48</td>
                    <td class="p-0">9:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">10:08</td>
                    <td class="p-0">10:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">10:28</td>
                    <td class="p-0">10:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">10:48</td>
                    <td class="p-0">10:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">11:08</td>
                    <td class="p-0">11:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">11:28</td>
                    <td class="p-0">11:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">11:48</td>
                    <td class="p-0">11:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">12:08</td>
                    <td class="p-0">12:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">12:28</td>
                    <td class="p-0">12:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">12:48</td>
                    <td class="p-0">12:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">13:08</td>
                    <td class="p-0">13:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">13:28</td>
                    <td class="p-0">13:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">13:48</td>
                    <th class="inifin p-0">13:58</th>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Guayabal Tabla 1</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:48 A 13:58</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Ignacio Bermeo</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">7:38 A 8:38</th>
                    <td class="inifin p-0">Cesar Osorio</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Llegar con anticipación al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Juan Fernando Quintero</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light "><div class="d-flex"><div class="w-25 text-center">1</div> <div class="w-75 text-center">Guayabal PM</div></div></th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Estación CABLE</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0 "></td>
                    <th class="inifin p-0">13:58</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">14:08</td>
                    <td class="p-0">14:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">14:28</td>
                    <td class="p-0">14:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">14:48</td>
                    <td class="p-0">14:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">15:08</td>
                    <td class="p-0">15:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">15:28</td>
                    <td class="p-0">15:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">15:48</td>
                    <td class="p-0">15:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">16:08</td>
                    <th class="inifin p-0">16:18</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">16:28</th>
                    <th class="inifin p-0">16:38</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">16:48</th>
                    <th class="inifin p-0">16:58</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">17:08</th>
                    <th class="inifin p-0">17:18</th>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">17:28</td>
                    <td class="p-0">17:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">17:48</td>
                    <td class="p-0">17:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">18:08</td>
                    <td class="p-0">18:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">18:28</td>
                    <td class="p-0">18:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">18:48</td>
                    <td class="p-0">18:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">19:08</td>
                    <td class="p-0">19:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">19:28</td>
                    <td class="p-0">19:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">19:48</td>
                    <td class="p-0">19:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">20:08</td>
                    <td class="p-0">20:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">20:28</td>
                    <td class="p-0">20:38</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">20:48</td>
                    <td class="p-0">20:58</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">21:08</td>
                    <td class="p-0">21:18</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">21:28</td>
                    <td class="p-0">21:37</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">21:46</td>
                    <td class="p-0">21:55</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">22:04</td>
                    <td class="p-0">22:12</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">22:21</td>
                    <td class="p-0">22:29</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <td class="p-0">22:38</td>
                    <td class="p-0">22:46</td>
                </tr>
                <tr>
                    <td class="p-0">1</td>
                    <th class="inifin p-0">22:55</th>
                    <td class="p-0"></td>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Guayabal Tabla 1</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">13:58 A 22:55</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Juan Fernando Quintero</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">16:18 A 17:18</th>
                    <td class="inifin p-0">Cesar Osorio</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Al llegar al patio en la noche, entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Ignacio Bermeo</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Guayacanes AM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0 ">4:53</th>
                    <td class="p-0">5:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">5:23</td>
                    <td class="p-0">5:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">5:53</td>
                    <td class="p-0">6:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">6:23</td>
                    <td class="p-0">6:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">6:53</td>
                    <td class="p-0">7:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">7:23</td>
                    <td class="p-0">7:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">7:53</td>
                    <th class="inifin p-0">8:08</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">8:23</th>
                    <th class="inifin p-0">8:38</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">8:53</th>
                    <th class="inifin p-0">9:08</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">9:23</td>
                    <td class="p-0">9:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">9:53</td>
                    <td class="p-0">10:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">10:23</td>
                    <td class="p-0">10:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">10:53</td>
                    <td class="p-0">11:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">11:23</td>
                    <td class="p-0">11:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">11:53</td>
                    <td class="p-0">12:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">12:23</td>
                    <th class="inifin p-0">12:38</th>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Guayacanes Tabla 3</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:53 A 12:38</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Juan Carlos Gomez</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">8:08 A 9:08</th>
                    <td class="inifin p-0">Juan Miguel Rivillas</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Llegar con anticipación al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Hugo Molano</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Guayacanes PM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 "></td>
                    <th class="inifin p-0">12:38</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">12:53</td>
                    <td class="p-0">13:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">13:23</td>
                    <td class="p-0">13:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">13:53</td>
                    <td class="p-0">14:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">14:23</td>
                    <td class="p-0">14:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">14:53</td>
                    <td class="p-0">15:08</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">15:23</td>
                    <td class="p-0">15:38</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">15:54</td>
                    <th class="inifin p-0">16:09</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">16:24</th>
                    <th class="inifin p-0">16:39</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">16:54</th>
                    <th class="inifin p-0">17:09</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">17:24</td>
                    <td class="p-0">17:39</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">17:54</td>
                    <td class="p-0">18:09</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">18:24</td>
                    <td class="p-0">18:39</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">18:54</td>
                    <td class="p-0">19:09</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">19:24</td>
                    <td class="p-0">19:39</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">19:54</th>
                    <td class="p-0"></td>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Guayacanes Tabla 3</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">12:38 A 19:54</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Hugo Molano</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">16:09 A 17:09</th>
                    <td class="inifin p-0">Francisco Arias</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Al llegar al patio en la noche, entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Juan Carlos Gomez</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Miraflores AM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0 ">4:54</th>
                    <td class="p-0">5:12</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">5:29</td>
                    <td class="p-0">5:47</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">6:04</td>
                    <td class="p-0">6:22</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">6:39</td>
                    <th class="inifin p-0">6:57</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">7:14</th>
                    <th class="inifin p-0">7:32</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">7:46</th>
                    <th class="inifin p-0">8:01</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">8:16</td>
                    <td class="p-0">8:31</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">8:46</td>
                    <td class="p-0">9:01</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">9:16</td>
                    <td class="p-0">9:31</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">9:46</td>
                    <td class="p-0">10:01</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">10:16</td>
                    <td class="p-0">10:31</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">10:46</td>
                    <td class="p-0">11:01</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">11:16</td>
                    <td class="p-0">11:31</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">11:46</td>
                    <td class="p-0">12:01</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">12:16</td>
                    <th class="inifin p-0">12:31</th>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Miraflores Tabla 3</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:54 A 12:31</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Johan Restrepo</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">6:57 A 8:01</th>
                    <td class="inifin p-0">Juan Miguel Rivillas</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    </tr><tr><td colspan="2" class="p-1">Llegar con anticipacion al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Fabio Gonzales</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Miraflores PM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0 "></td>
                    <th class="inifin p-0">12:31</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">12:46</td>
                    <td class="p-0">13:01</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">13:16</td>
                    <td class="p-0">13:31</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">13:46</td>
                    <td class="p-0">14:01</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">14:16</td>
                    <td class="p-0">14:31</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">14:46</td>
                    <th class="inifin p-0">15:01</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">15:16</th>
                    <th class="inifin p-0">15:31</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">15:46</th>
                    <th class="inifin p-0">16:03</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">16:18</td>
                    <td class="p-0">16:35</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">16:50</td>
                    <td class="p-0">17:07</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">17:22</td>
                    <td class="p-0">17:39</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">17:54</td>
                    <td class="p-0">18:11</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">18:26</td>
                    <td class="p-0">18:43</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">18:58</td>
                    <td class="p-0">19:15</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">19:30</td>
                    <td class="p-0">19:47</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">20:02</th>
                    <td class="p-0"></td>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Miraflores Tabla 3</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">12:31 A 20:02</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Fabio Gonzales</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">15:01 A 16:03</th>
                    <td class="inifin p-0">Jorge Yamid Hoyos</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td>
                                    </tr><tr><td colspan="2" class="p-1">Al llegar al patio en la noche , entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Johan Restrepo</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>


    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Morelia AM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0 ">4:58</th>
                    <td class="p-0">5:14</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">5:30</td>
                    <td class="p-0">5:46</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">6:02</td>
                    <td class="p-0">6:18</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">6:34</td>
                    <td class="p-0">6:50</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">7:06</td>
                    <td class="p-0">7:22</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">7:38</td>
                    <td class="p-0">7:54</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">8:10</td>
                    <td class="p-0">8:26</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">8:42</td>
                    <td class="p-0">8:58</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">9:14</td>
                    <td class="p-0">9:30</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">9:46</td>
                    <td class="p-0">10:02</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">10:18</td>
                    <th class="inifin p-0">10:34</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">10:50</th>
                    <th class="inifin p-0">11:06</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">11:22</th>
                    <th class="inifin p-0">11:38</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">11:54</td>
                    <td class="p-0">12:10</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">12:26</td>
                    <td class="p-0">12:42</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">12:58</td>
                    <td class="p-0">13:14</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">13:30</td>
                    <td class="p-0">13:46</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">14:02</td>
                    <th class="inifin p-0">14:18</th>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Morelia Tabla 2</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:58 A 14:18</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">James Marulanda</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">10:34 A 11:38</th>
                    <td class="inifin p-0">Juan Miguel Rivillas</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    </tr><tr><td colspan="2" class="p-1">Llegar con anticipacion al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Jhon Alexander Valencia</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>


    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Morelia PM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 "></td>
                    <th class="inifin p-0">14:18</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">14:34</td>
                    <td class="p-0">14:50</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">15:06</td>
                    <td class="p-0">15:22</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">15:38</td>
                    <td class="p-0">15:54</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">16:10</td>
                    <td class="p-0">16:26</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">16:42</td>
                    <td class="p-0">16:58</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">17:14</td>
                    <th class="inifin p-0">17:30</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">17:46</th>
                    <th class="inifin p-0">18:02</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">18:18</th>
                    <th class="inifin p-0">18:34</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">18:50</td>
                    <td class="p-0">19:06</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">19:22</td>
                    <td class="p-0">19:38</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">19:54</td>
                    <td class="p-0">20:10</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">20:26</td>
                    <td class="p-0">20:42</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">20:58</td>
                    <td class="p-0">21:14</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">21:30</td>
                    <td class="p-0">21:46</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">22:02</td>
                    <td class="p-0">22:18</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">22:34</td>
                    <td class="p-0">22:50</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">23:06</td>
                    <td class="p-0">23:22</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">23:38</th>
                    <td class="p-0"></td>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Morelia Tabla 2</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">14:18 A 23:38</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Jhon Alexander Valencia</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">17:30 A 18:34</th>
                    <td class="inifin p-0">Francisco Arias</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td>
                                    </tr><tr><td colspan="2" class="p-1">Al llegar al patio en la noche , entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">James Marulanda</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>


    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light "><div class="d-flex"><div class="w-25 text-center">2</div> <div class="w-75 text-center">Guayabal AM</div></div></th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Estación CABLE</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0 ">4:58</th>
                    <td class="p-0">5:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">5:18</td>
                    <td class="p-0">5:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">5:38</td>
                    <td class="p-0">5:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">5:58</td>
                    <td class="p-0">6:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">6:18</td>
                    <td class="p-0">6:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">6:38</td>
                    <th class="inifin p-0">6:48</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">6:58</th>
                    <th class="inifin p-0">7:08</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">7:18</th>
                    <th class="inifin p-0">7:28</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">7:38</td>
                    <td class="p-0">7:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">7:58</td>
                    <td class="p-0">8:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">8:18</td>
                    <td class="p-0">8:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">8:38</td>
                    <td class="p-0">8:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">8:58</td>
                    <td class="p-0">9:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">9:18</td>
                    <td class="p-0">9:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">9:38</td>
                    <td class="p-0">9:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">9:58</td>
                    <td class="p-0">10:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">10:18</td>
                    <td class="p-0">10:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">10:38</td>
                    <td class="p-0">10:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">10:58</td>
                    <td class="p-0">11:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">11:18</td>
                    <td class="p-0">11:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">11:38</td>
                    <td class="p-0">11:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">11:58</td>
                    <td class="p-0">12:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">12:18</td>
                    <td class="p-0">12:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">12:38</td>
                    <td class="p-0">12:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">12:58</td>
                    <th class="inifin p-0">13:08</th>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Guayabal Tabla 2</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:58 A 13:08</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Brayan Fernando Duque</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">6:48 A 7:28</th>
                    <td class="inifin p-0">Cesar Osorio</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Llegar con anticipación al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Julio Arias</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light "><div class="d-flex"><div class="w-25 text-center">2</div> <div class="w-75 text-center">Guayabal PM</div></div></th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Estación CABLE</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 "></td>
                    <th class="inifin p-0">13:08</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">13:18</td>
                    <td class="p-0">13:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">13:38</td>
                    <td class="p-0">13:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">13:58</td>
                    <td class="p-0">14:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">14:18</td>
                    <td class="p-0">14:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">14:38</td>
                    <td class="p-0">14:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">14:58</td>
                    <td class="p-0">15:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">15:18</td>
                    <th class="inifin p-0">15:28</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">15:38</th>
                    <th class="inifin p-0">15:48</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">15:58</th>
                    <th class="inifin p-0">16:08</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">16:18</td>
                    <td class="p-0">16:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">16:38</td>
                    <td class="p-0">16:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">16:58</td>
                    <td class="p-0">17:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">17:18</td>
                    <td class="p-0">17:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">17:38</td>
                    <td class="p-0">17:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">17:58</td>
                    <td class="p-0">18:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">18:18</td>
                    <td class="p-0">18:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">18:38</td>
                    <td class="p-0">18:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">18:58</td>
                    <td class="p-0">19:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">19:18</td>
                    <td class="p-0">19:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">19:38</td>
                    <td class="p-0">19:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">19:58</td>
                    <td class="p-0">20:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">20:18</td>
                    <td class="p-0">20:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">20:38</td>
                    <td class="p-0">20:48</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">20:58</td>
                    <td class="p-0">21:08</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">21:18</th>
                    <td class="p-0"></td>
                </tr>
        
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Guayabal Tabla 2</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">13:08 A 21:18</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Julio Arias</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">15:28 A 16:08</th>
                    <td class="inifin p-0">Cesar Osorio</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Al llegar al patio en la noche, entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Brayan Fernando Duque</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">UTP Hábil AM</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 "></td>
                    <th class="inifin p-0">5:00</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">5:28</td>
                    <td class="p-0">5:55</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">6:23</td>
                    <td class="p-0">6:50</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">7:18</td>
                    <td class="p-0">7:45</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">8:13</td>
                    <th class="inifin p-0">8:40</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">9:08</th>
                    <th class="inifin p-0">9:35</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">10:06</td>
                    <td class="p-0">10:34</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">11:00</td>
                    <td class="p-0">11:28</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">11:54</td>
                    <td class="p-0">12:22</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">12:48</td>
                    <td class="p-0">13:16</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">13:42</td>
                    <th class="inifin p-0">14:10</th>
                </tr>
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">UTP Tabla 2</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">5:00 A 14:10</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Jose Manuel Naranjo</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">8:40 A 9:35</th>
                    <td class="inifin p-0">Edwin Quintero</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Llegar con anticipacion al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Andres Gomez</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">UTP Hábil PM</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0 "></td>
                    <th class="inifin p-0">14:10</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">14:44</td>
                    <td class="p-0">15:12</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">15:39</td>
                    <td class="p-0">16:07</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">16:34</td>
                    <th class="inifin p-0">17:02</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">17:31</th>
                    <th class="inifin p-0">18:01</th>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">18:31</td>
                    <td class="p-0">19:01</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">19:31</td>
                    <td class="p-0">20:01</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">20:32</td>
                    <td class="p-0">21:00</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">21:28</td>
                    <td class="p-0">21:56</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <td class="p-0">22:29</td>
                    <td class="p-0">22:57</td>
                </tr>
                <tr>
                    <td class="p-0">2</td>
                    <th class="inifin p-0">23:24</th>
                    <td class="p-0"></td>
                </tr>
            </table>

        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">UTP Tabla 2</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">14:10 A 23:24</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Andres Gomez</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">17:02 A 18:01</th>
                    <td class="inifin p-0">Juan Miguel Rivillas</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Al llegar al patio en la noche, entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Jose Manuel Naranjo</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>


    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">2500 Partida Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <th class="inifin p-0 ">5:06</th>
                    <td class="p-0">5:20</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">5:34</td>
                    <td class="p-0">5:48</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">6:02</td>
                    <td class="p-0">6:16</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">6:30</td>
                    <td class="p-0">6:44</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">6:58</td>
                    <td class="p-0">7:12</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">7:26</td>
                    <td class="p-0">7:40</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">7:54</td>
                    <td class="p-0">8:08</td>
                </tr>
                <tr>
                    <td class="p-0">5</td>
                    <td class="p-0">8:22</td>
                    <th class="inifin p-0">8:35</th>
                </tr>
                <tr>
                    <th colspan="3" class="amarillo">Sube a Retanquear</th>
                </tr>
                <tr>
                    <th colspan="3" class="text-light">La Virginia Hábil AM</th>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0"></td>
                    <th class="inifin p-0">10:17</th>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">11:06</td>
                    <td class="p-0">11:51</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">12:36</td>
                    <th class="inifin p-0">13:21</th>
                </tr>
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Inicia 2500 Tabla 5</p>
                        <p class="p-3 m-0">Termina Virginia Tabla 4</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">5:06 A 13:21</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Derian Salazar</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">8:35 A 10:17(subir a retanquear)</th>
                    <td class="inifin p-0">N/A</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Llegar con anticipación al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Juan Ibañez</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">La Virginia Hábil PM</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">La Virginia</td>
                    <td class="text-light p-0">CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0 "></td>
                    <th class="inifin p-0">16:23</th>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">17:10</td>
                    <td class="p-0">17:58</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">18:45</td>
                    <td class="p-0">19:33</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">20:19</td>
                    <td class="p-0">21:08</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">21:52</td>
                    <td class="p-0">22:37</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <th class="inifin p-0">23:20</th>
                    <td class="p-0"></td>
                </tr>
                <tr>
                    <th colspan="3" class="pre">Tabla Sin Pausado, Recibe en Cuba</th>
                </tr>
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Virginia Tabla 4</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">16:23 A 23:20</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Juan Ibañez</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">13:21 A 16:23</th>
                    <td class="inifin p-0">Juan Miguel Rivillas</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Al llegar al patio en la noche, entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Derian Salazar</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Montelibano AM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0 ">5:04</th>
                    <td class="p-0">5:19</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">5:34</td>
                    <td class="p-0">5:49</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">6:04</td>
                    <td class="p-0">6:19</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">6:34</td>
                    <td class="p-0">6:49</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">7:04</td>
                    <td class="p-0">7:19</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">7:34</td>
                    <td class="p-0">7:49</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">8:04</td>
                    <td class="p-0">8:19</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">8:35</td>
                    <td class="p-0">8:50</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">9:05</td>
                    <th class="inifin p-0">9:20</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0">9:35</th>
                    <th class="inifin p-0">9:50</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0">10:05</hd>
                    <th class="inifin p-0">10:20</hd>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">10:35</td>
                    <td class="p-0">10:50</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">11:05</td>
                    <td class="p-0">11:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">11:35</td>
                    <td class="p-0">11:50</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">12:05</td>
                    <td class="p-0">12:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">12:35</td>
                    <th class="inifin p-0">12:50</th>
                </tr>
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Montelibano Tabla 6</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">5:04 A 12:50</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Alejandro Rodriguez</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">9:20 A 10:20</th>
                    <td class="inifin p-0">Juan Miguel Rivillas</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Llegar con anticipación al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Daniel Carvajal</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>


    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Montelibano PM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0 "></td>
                    <th class="inifin p-0">12:50</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">13:05</td>
                    <td class="p-0">13:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">13:35</td>
                    <td class="p-0">13:50</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">14:05</td>
                    <td class="p-0">14:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">14:35</td>
                    <th class="inifin p-0">14:50</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0">15:05</th>
                    <th class="inifin p-0">15:20</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0">15:35</th>
                    <th class="inifin p-0">15:50</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">16:05</td>
                    <td class="p-0">16:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">16:35</td>
                    <td class="p-0">16:50</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">17:05</td>
                    <td class="p-0">17:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">17:35</hd>
                    <td class="p-0">17:50</hd>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">18:05</td>
                    <td class="p-0">18:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">18:35</td>
                    <td class="p-0">18:50</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">19:05</td>
                    <td class="p-0">19:20</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">19:35</td>
                    <td class="p-0">19:50</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0">20:05</th>
                    <td class="p-0"></td>
                </tr>
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Montelibano Tabla 6</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">12:50 A 20:05</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Daniel Carvajal</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">14:50 A 15:50</th>
                    <td class="inifin p-0">Francisco Arias</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Al llegar al patio en la noche, entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Alejandro Rodriguez</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Cerritos AM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0">5:08</th>
                    <td class="p-0">5:40</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">6:11</td>
                    <td class="p-0">6:43</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">7:14</td>
                    <td class="p-0">7:46</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">8:17</td>
                    <th class="inifin p-0">8:49</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0">9:28</th>
                    <th class="inifin p-0">10:00</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">10:32</td>
                    <td class="p-0">11:04</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">11:36</td>
                    <td class="p-0">12:08</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">12:41</td>
                    <td class="p-0">13:12</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">13:46</td>
                    <th class="inifin p-0">14:18</th>
                </tr>
                <tr>
                    <td colspan="3" class="pre">Pausado Para Con Carro, el Compañero Del Pausado Ingresa Con Carro</td>
                </tr>
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Cerritos Tabla 6</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">5:08 A 14:18</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Jorge Luis Correa</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">8:49 A 10:00(para con carro)</th>
                    <td class="inifin p-0">Alexander Rojo</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Llegar con anticipación al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y entregar el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Luis Carlos Garcia</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>


    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Cerritos PM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter CUBA</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0"></td>
                    <th class="inifin p-0">14:18</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">14:50</td>
                    <td class="p-0">15:21</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">15:53</td>
                    <th class="inifin p-0">16:24</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <th class="inifin p-0">16:55</th>
                    <th class="inifin p-0">17:26</th>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">17:58</td>
                    <td class="p-0">18:29</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">19:01</td>
                    <td class="p-0">19:32</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">20:04</td>
                    <td class="p-0">20:35</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">21:03</td>
                    <td class="p-0">21:34</td>
                </tr>
                <tr>
                    <td class="p-0">6</td>
                    <td class="p-0">22:07</td>
                    <th class="inifin p-0">22:36</th>
                </tr>
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Cerritos Tabla 6</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">14:18 A 22:36</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Luis Carlos Garcia</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">16:24 A 17:26</th>
                    <td class="inifin p-0">Jorge Yamid Hoyos</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y recibir el carro al compañero</td></tr>
                                    <tr><td colspan="2" class="p-1">Al llegar al patio en la noche, entregar carro y bitacora al patiero</td></tr>
                                    <tr><td colspan="2" class="p-1">Si tiene algun reporte o novedad con el carro, informar al jefe inmediato <strong>(FACILITADOR O JEFE OPERATIVO)</strong></td></tr>
                                    <tr><td colspan="2" class="p-1">Favor confirmar el recibido de la programación.</td></tr>
                                </tr>
                                <tr>
                                    <th colspan="1" class="inifin p-0">Compañero al que le recibe</tdh>
                                    <td colspan="1" class="inifin p-0">Jorge Luis Correa</td>
                                </tr>
                            </tr>
                        </tr>
                    </tr>
                </tr>
            </table>
        </div>
    </div>


    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Puerto caldas Lunes a Sabado</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Viajero</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">4:48</th>
                    <td class="p-0">5:34</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">6:19</td>
                    <td class="p-0">7:05</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">7:50</td>
                    <td class="p-0">8:36</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">9:21</td>
                    <th class="inifin p-0">10:06</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <th class="inifin p-0">10:47</th>
                    <th class="inifin p-0">11:32</th>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">12:17</td>
                    <td class="p-0">13:02</td>
                </tr>
                <tr>
                    <td class="p-0">3</td>
                    <td class="p-0">13:47</td>
                    <th class="inifin p-0">14:32</th>
                </tr>
                <tr>
                    <td colspan="3" class="pre">Preguntar al facilitador donde deja el carro</td>
                </tr>
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla AM</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Puerto Caldas Tabla 3</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">4:48 A 14:32</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Didier Escudero</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">10:06 A 11:32</th>
                    <td class="inifin p-0">Anderson Gordillo</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1">Llegar con anticipación al patio para realizar el alistamiento del carro</td></tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y preguntar donde deja el carro</td></tr>
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

    <div class="tabla lunes">

        <div class="container1 d-flex mt-5 mx-auto">

            <table class="table1 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                    <th colspan="3" class="text-light ">Mercasa PM Hábil</th>
                </tr>
        
                <!-- Filas con tres columnas cada una, todas con "tabla" -->
                <tr>
                    <td class="text-light p-0">Tabla</td>
                    <td class="text-light p-0">Barrio</td>
                    <td class="text-light p-0">Inter Cuba</td>
                </tr>
                <tr>
                    <td colspan="3" class="amarillo p-0">Preguntar de donde saca carro</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <th class="inifin p-0">15:26</th>
                    <td class="p-0">15:41</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">15:58</td>
                    <td class="p-0">16:14</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">16:30</td>
                    <td class="p-0">16:46</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">17:02</td>
                    <td class="p-0">17:18</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">17:34</td>
                    <td class="p-0">17:50</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">18:06</td>
                    <td class="p-0">18:22</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">18:38</td>
                    <th class="inifin p-0">18:54</th>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <th class="inifin p-0">19:12</th>
                    <th class="inifin p-0">19:27</th>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <th class="inifin p-0">19:42</th>
                    <th class="inifin p-0">19:57</th>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">20:10</td>
                    <td class="p-0">20:25</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">20:40</td>
                    <td class="p-0">20:55</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">21:10</td>
                    <td class="p-0">21:25</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">21:40</td>
                    <td class="p-0">21:55</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">22:10</td>
                    <td class="p-0">22:25</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">22:40</td>
                    <td class="p-0">22:55</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <td class="p-0">23:10</td>
                    <td class="p-0">23:25</td>
                </tr>
                <tr>
                    <td class="p-0">4</td>
                    <th class="inifin p-0">23:40</th>
                    <td class="p-0"></td>
                </tr>
            </table>
        </div>

        <div class="container2 d-flex mt-5 mx-auto">

            <table class="table2 mx-auto table table-bordered border-dark text-center">
                <!-- Primera fila -->
                <tr>
                <th class="pro p-1 w-50">PROGRAMACIÓN:</th>
                <td class="fechaMañana p-1 w-50"  ></td>
                </tr>
                
                <!-- Segunda fila -->
                <tr>
                    <th class="inifin p-0">Tabla pm</th>
                    <th class="inifin p-0">Operador</th>
                </tr>
            
                <!-- Tercera fila (con dos celdas grandes y una para Edwin) -->
                <tr>
                <!-- Columna de Altagracia con la tabla de horas debajo -->
                <td rowspan="1" class="azulc p-0">
                        <p class="p-3 m-0">Mercasa Tabla 4</p>
                        <div class="tabla d-flex">
                            <p class="hora m-0" style="padding-right: 3px; font-weight: bold;" >TABLA DE:</p>
                            <p class="hora m-0">15:26 A 23:40</p>
                        </div>
                        
                </td>
                <!-- Columna de Edwin Quintero al lado -->
                <td rowspan="1" class="amarillo pt-4 m-0">
                    <p class="edw">Fernando Jaramillo</p>
                </td>
                </tr>
                <tr>
                    <th class="inifin p-0">La hora de su pausado es:</th>
                    <th class="inifin p-0">Quien lo realiza</th>
                </tr>
                <tr>
                    <th class="inifin p-0">18:54 A 19:57</th>
                    <td class="inifin p-0">Francisco Arias</td>
                </tr>
                <tr>
                    <tr>
                        <tr>
                            <tr>
                                <tr>
                                    <tr><td colspan="2" class="p-1"><strong>RECUERDE:</strong> Llenar bitacora y preguntar de donde saca carro</td></tr>
                                    <tr><td colspan="2" class="p-1">Al llegar al patio en la noche, entregar carro y bitacora al patiero</td></tr>
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



<script>
document.addEventListener('DOMContentLoaded', function() {
    const fechaMañana = new Date();
    fechaMañana.setDate(fechaMañana.getDate() + 1); // Sumar un día para obtener la fecha de mañana

    // Formato deseado: viernes, 25 de enero de 2025
    const opciones = {
        weekday: 'long', // día de la semana completo
        day: 'numeric', // día del mes como número
        month: 'long', // mes completo
        year: 'numeric' // año completo
    };

    // Obtener la fecha formateada
    const fechaFormateada = fechaMañana.toLocaleDateString('es-ES', opciones);

    // Asignar la fecha formateada a los elementos correspondientes
    const elementosFecha = document.querySelectorAll('.fechaMañana');
    elementosFecha.forEach(elemento => {
        elemento.textContent = `${fechaFormateada}`;
    });

    // Llamar a la función mostrarTablas para mostrar la tabla de lunes al cargar
    mostrarTablas('lunes');
    
    console.log("La fecha para mañana es: " + fechaFormateada);  // Depuración de la fecha
});

// Función para mostrar las tablas correspondientes según el día
function mostrarTablas(dia) {
    console.log(`Mostrando tabla para el día: ${dia}`);  // Depuración de la función
    
    const tablas = document.querySelectorAll('.tabla');  // Seleccionar todas las tablas
    tablas.forEach(tabla => {
        tabla.style.display = 'none';  // Ocultar todas las tablas
    });

    // Seleccionar las tablas que correspondan al día
    const tablaSeleccionada = document.querySelectorAll(`.tabla.${dia}`);
    tablaSeleccionada.forEach(tabla => {
        tabla.style.display = 'flex';  // Mostrar la tabla correspondiente con el día
    });
}


</script>


@endsection


