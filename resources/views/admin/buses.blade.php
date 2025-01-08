@extends('layouts.plantillaAdmin')

@section('title', 'Buses')

@section('estilos')
<link rel="stylesheet" href="{{asset('CSS/bus.css')}}">
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
    <h3 class="p-1">Buses</h3>
    <form action="" class="search">
      <input type="text" id="searchInput" class="form-control" placeholder="Filtra por código o estado">
  </form>
</div>

<div class="table-responsive">
  <table class="table table-striped mx-auto mt-3 border" style="width: 80%;" id="busesTable">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Estado</th>
          <th scope="col" class="d-flex justify-content-between align-items-center">
            Cambiar Estado
            <a href="{{ route ('agregarBus')}}" class="btn btn-sm btn-success" title="Agregar Bus"><i class='bx bx-plus fs-6' ></i></a>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($buses as $bus)
            <tr>
                <td class="code">{{ $bus->code}}</td>
                @if($bus->status)
                  <td>{{ \App\Models\BusStatus::find($bus->status)->status_name ?? 'Sin estado' }}</td>
                @else
                  <td>Sin estado</td>
                @endif
                <td class="actions">
                    <form action="{{ route('cambiarEstadoBus', $bus->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PATCH') <!-- Usamos PATCH porque estamos actualizando el estado -->
                        <button id="BotonT" type="button" class="btn btn-sm btn-success transfer-btn">
                            <select class="bg-success text-light border-0" name="status" onchange="this.form.submit()">
                                <option class="bg-light text-dark" value="" disabled>Cambiar Estado</option>
                                @foreach($status as $state)
                                    <option class="bg-light text-dark" value="{{ $state->id }}" {{ $bus->status == $state->id ? 'selected' : '' }}>
                                        {{ $state->status_name }}
                                    </option>
                                @endforeach
                            </select>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
  </table>
  <nav class="pagination buses justify-content-center">
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
    handlePaginationAndFilter('#busesTable', '.pagination.buses', '#searchInput');
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


