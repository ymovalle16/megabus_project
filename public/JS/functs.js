document.addEventListener('DOMContentLoaded', function() {
    const fechaHoy = new Date();
    fechaHoy.setDate(fechaHoy.getDate() + 1); // Sumar un día para obtener la fecha de mañana

    // Array de días de la semana
    const diasSemana = ['domingo', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado'];

    // Obtener el día de la semana actual (0 = domingo, 1 = lunes, ..., 6 = sabado)
    const diaActual = fechaHoy.getDay();

    // Determinar el día siguiente
    const diaSiguiente = diasSemana[diaActual];

    // Llamar a la función para mostrar las tablas del día siguiente
    mostrarTablas(diaSiguiente);

    // Mostrar la fecha para mañana
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

// Función para mostrar las tablas correspondientes según el día
function mostrarTablas(dia) {
    console.log(`Mostrando tabla para el día: ${dia}`); // Depuración de la función

    const tablas = document.querySelectorAll('.tabla'); // Seleccionar todas las tablas
    tablas.forEach(tabla => {
        tabla.style.display = 'none'; // Ocultar todas las tablas
    });

    // Seleccionar las tablas que correspondan al día
    const tablaSeleccionada = document.querySelectorAll(`.tabla.${dia}`);
    tablaSeleccionada.forEach(tabla => {
        tabla.style.display = 'flex'; // Mostrar la tabla correspondiente con el día
    });
};

// document.addEventListener('DOMContentLoaded', function() {
//     // Definimos un objeto que almacene el contador para cada día
//     const dayCounters = {
//         lunes: 1,
//         martes: 1,
//         miercoles: 1,
//         jueves: 1,
//         viernes: 1,
//         sabado: 1,
//         domingo: 1
//     };

//     // Obtenemos todas las tablas con la clase 'tabla'
//     const tablas = document.querySelectorAll('.tabla');

//     // Recorremos todas las tablas
//     tablas.forEach((tabla) => {
//         // Obtenemos el nombre del día de la clase de cada tabla
//         const dayClass = Array.from(tabla.classList).find(cls => cls !== 'tabla');
//         const nombreRuta = tabla.getAttribute('data-nombre-ruta');

//         // Generamos el código dependiendo del día
//         let codePrefix = '';
//         switch (dayClass) {
//             case 'lunes':
//                 codePrefix = 'L';
//                 break;
//             case 'martes':
//                 codePrefix = 'M';
//                 break;
//             case 'miercoles':
//                 codePrefix = 'MC';
//                 break;
//             case 'jueves':
//                 codePrefix = 'J';
//                 break;
//             case 'viernes':
//                 codePrefix = 'V';
//                 break;
//             case 'sabado':
//                 codePrefix = 'S';
//                 break;
//             case 'domingo':
//                 codePrefix = 'D';
//                 break;
//             default:
//                 codePrefix = '';  // No prefix if no day is found
//                 break;
//         }

//         // Asignamos el código único (por ejemplo, L01, M01, MC01...) si hay un prefijo válido
//         if (codePrefix) {
//             const generatedCode = `${codePrefix}${String(dayCounters[dayClass]).padStart(2, '0')}`;

//             // Asignamos el código a un atributo de la tabla o donde lo necesites
//             tabla.setAttribute('data-code', generatedCode);

//             // Enviar los datos a la base de datos
//             const data = {
//                 codigo: generatedCode,
//                 nombreRuta: nombreRuta
//             };

//             fetch('/api/tabs', {
//                 method: 'POST',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//                 },
//                 body: JSON.stringify(data)
//             })
//             .then(response => response.json())
//             .then(result => {
//                 console.log('Datos guardados:', result);
//             })
//             .catch(error => {
//                 console.error('Error al guardar los datos:', error);
//             });

//             // Incrementamos el contador para ese día
//             dayCounters[dayClass]++;
//         }
//     });

//     // Ahora puedes enviar los códigos a la base de datos o hacer lo que necesites
//     // Por ejemplo, con el código generado en data-code de cada tabla
//     tablas.forEach((tabla) => {
//         console.log(tabla.getAttribute('data-code'));  // Aquí puedes ver el código generado para cada tabla
//     });
// });
