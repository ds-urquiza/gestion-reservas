
/*---------------ALTA RESERVA ----------------------------  */
document.addEventListener("DOMContentLoaded", function(){
    const formFiltro = document.querySelector('#altaReserva');

    formFiltro.addEventListener('submit', function(nuevaReserva){
        nuevaReserva.preventDefault(); 

        document.querySelector('#respuesta').innerHTML = "<p>Guardando reserva...</p>";
        
        const datosReserva = new FormData(formFiltro);

        const url = formFiltro.action;
        fetch(url, { method: "POST", body: datosReserva })
            .then(respuesta => respuesta.json())  // Corrige 'jason' a 'json'
            .then(datos => { mostrarReserva(datos); })
            .catch(error => { console.log(error); });
    });
});


function mostrarReserva(datos) {
    let res = "<ul><li>Nombre y apellido: " + datos.cliente + "</li>";
    res += "<li>Fecha ingreso: " + datos.fechaIngreso + "</li>";
    res += "<li>Fecha salida: " + datos.fechaSalida + "</li>";
    res += "<li>Habitación: " + datos.habitacion + "</li></ul>";
    document.querySelector('#respuesta').innerHTML = res;
}



function mostrarTipoHabitacion(){}

function mostarReservas(){}

function mostrarHabitaciones(){}

