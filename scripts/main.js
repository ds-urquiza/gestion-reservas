
/*---------------FILTRO DE RESERVA ----------------------------  */
document.addEventListener("DOMContentLoaded", function(){
    const formFiltro = document.querySelector('#filtroEstado')


    formFiltro.addEventListener('submit', function(buscaEstado){
        buscaEstado.preventDefault() //manejo el envio del formulario de forma personallizada

        document.querySelector('#tipoEstado').innerHTML = "<p> Buscando reservas...</p>" //indicar al usuario que la solicitud está siendo procesada
        
         //se crea el objeto datosFiltro que recoge automáticamente los datos de entrada del formulario 
         //(campos de texto, selección, etc.) y los prepara para enviarlos como parte de una solicitud HTTP.
         const seleccionEstado = new datosFiltro (formFiltro)

         /* la constante url almacena el valor del atributo action del formulario, 
         que generalmente es la URL a la que se enviarán los datos.  */

         const url = formFiltro.action 

         /* La función fetch() envía una solicitud HTTP a la URL del formulario utilizando el método POST.
          Esto es lo que envía los datos del formulario al servidor */

          fetch(url, {method: "POST", body: seleccionEstado})
          //La primera then() convierte la respuesta a formato JSON para poder trabajar con los datos que envía el servidor.
            .then(respuesta =>respuesta.jason())

            //Una vez que la respuesta se ha convertido a JSON, el código ejecuta la función 
            //mostrarResultados(datos) pasando los datos recibidos como argument
            .then(datos => {mostrarEstado(datos); })

            //Si ocurre algún error durante la solicitud la promesa entra en la sección catch. Aquí se captura y muestra el error en la consola
            .catch( error => {console.log(error);});
            
        })
})


 /* La función recibe un parámetro llamado datos, que se espera que sea un objeto que contiene los datos de la reserva */
 /* datos se muestran enela tabal  segun el filtro */
function mostrarEstado(datos){

    let res ="<table><tr><td>" + datos.cliente + "</td>";
    res+= "<td>" + + "</td>";
    res+= "<td>" + + "</td>";
    res+= "<td>" + + "</td>";
    res+= "<td>" + + "</td>";
    res+= "</tr> </table>";
}


