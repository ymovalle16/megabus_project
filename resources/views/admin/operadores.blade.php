@extends('layouts.plantillaAdmin')

@section('title', 'Operadores')

@section('estilos')
<link rel="stylesheet" href="{{asset('CSS/ope.css')}}">
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

<div class="encabezado bg-light rounded shadow w-75 mx-auto text-center ">
    <h3 class="p-1">Operadores</h3>
    <form action="" class="search">
      <input type="text" id="searchInput" class="form-control" placeholder="Filtra por documento, nombre, fecha de vencimiento de licencia o estado">
  </form>
</div>

<div class="table-responsive">
  <table class="table table-striped mx-auto mt-3 border" style="width: 80%;" id="operatorsTable">
      <thead>
        <tr>
          <th scope="col">Número de identificación</th>
          <th scope="col">Nombre</th>
          <th scope="col">Fecha de vencimiento de la licencia</th>
          <th scope="col">Estado</th>
          <th scope="col">Bus asignado</th>
          <th scope="col" class="d-flex justify-content-between align-items-center"> 
            Acciones 
            <a href="{{ route ('agregarOpe')}}" class="btn btn-sm btn-success" title="Agregar operador"><i class='bx bx-plus fs-6' ></i></a>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td class="identification">{{ $user->identification}}</td>
            <td class="name">{{ $user->name}}</td>
            <td class="licenseExpiration">
              <p id="licenseExpiration" data-date="{{ $user->license_expiration }}">{{ $user->license_expiration }}</p>
            </td>
            @if($user->status)
                <td>{{ \App\Models\Status::find($user->status)->status_name ?? 'Sin estado' }}</td>
            @else
              <td>Sin estado</td>
            @endif
            @if($user->bus_code)
                <td>{{ $user->bus_code }}</td>
            @else
                <td>Sin bus Asignado</td>
            @endif
            <td class="actions">
              <a href="{{ route('editOpe', $user->id)}}" class="btn btn-success btn-sm w-50 "><i class='bx bxs-edit-alt fs-6'></i></a>
            </td>
          </tr> 
        @endforeach
      </tbody>
  </table>
  <nav class="pagination operators justify-content-center">
    <a class="page-link prev text-dark" href="#" aria-label="Previous">
        <span aria-hidden="true"><</span>
    </a>
    <span class="current-page"></span>
    <a class="page-link next text-dark" href="#" aria-label="Next">
        <span aria-hidden="true">></span>
    </a>
  </nav>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Inicialización de la paginación
    handlePaginationAndFilter('.table#operatorsTable', '.pagination.operators', '#searchInput');
    
    const dateElements = document.querySelectorAll('[data-date]'); // Seleccionamos todos los elementos con data-date

    dateElements.forEach(function(element) { 
      const dateString = element.getAttribute('data-date'); // Obtenemos el valor del atributo data-date
      const dateParts = dateString.split('-'); // Suponiendo que la fecha está en formato 'Y-m-d'
      const date = new Date(Date.UTC(dateParts[0], dateParts[1] - 1, dateParts[2])); // Creamos una fecha en UTC

      const months = [
          'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
          'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
      ];

      const day = date.getUTCDate();
      const month = months[date.getUTCMonth()];
      const year = date.getUTCFullYear();

      const formattedDate = `${day} de ${month} del año ${year}`;
      element.textContent = formattedDate;
    });
});

function handlePaginationAndFilter(tableSelector, paginationSelector, searchInputSelector) {
    const table = document.querySelector(tableSelector);
    const paginationContainer = document.querySelector(paginationSelector);
    const prevLink = paginationContainer.querySelector('.prev');
    const nextLink = paginationContainer.querySelector('.next');
    const currentPageSpan = paginationContainer.querySelector('.current-page');

    const recordsPerPage = 10;
    let totalRecords = table.querySelectorAll('tbody tr').length;
    let totalPages = Math.ceil(totalRecords / recordsPerPage);

    let currentPage = 1;
    showPage(currentPage);

    prevLink.addEventListener('click', (event) => {
        event.preventDefault();
        if (currentPage > 1) {
            showPage(--currentPage);
        }
    });

    nextLink.addEventListener('click', (event) => {
        event.preventDefault();
        if (currentPage < totalPages) {
            showPage(++currentPage);
        }
    });

    function showPage(pageNumber) {
        const startIndex = (pageNumber - 1) * recordsPerPage;
        const endIndex = startIndex + recordsPerPage;

        table.querySelectorAll('tbody tr').forEach((row, index) => {
            row.style.display = (index >= startIndex && index < endIndex) ? '' : 'none';
        });

        currentPageSpan.textContent = `Página ${pageNumber} de ${totalPages}`;
    }

    function filterTable() {
        const searchInput = document.querySelector(searchInputSelector).value.toLowerCase();
        const rows = table.querySelectorAll('tbody tr');
        
        rows.forEach(row => {
            const cells = row.cells;
            let match = false;

            for (let i = 0; i < cells.length; i++) {
                if (cells[i].textContent.toLowerCase().includes(searchInput)) {
                    match = true;
                    break;
                }
            }

            row.style.display = match ? '' : 'none'; // Mostrar u ocultar la fila
        });

        if (searchInput === "") {
            resetPagination(); // Reestablecer la paginación si el input está vacío
        }
    }

    function resetPagination() {
        currentPage = 1;
        showPage(currentPage);
    }

    document.querySelector(searchInputSelector).addEventListener('input', filterTable);
}
</script>

@endsection


