
/* ----------------USUARIO ADMINISTRADOR------------------- */
/* const usuarioAdmin = "admnistracion@hotel.com"
const passAdmin = "123456"

document.getElementById("btn-ingresar").addEventListener("click", login)

function login (){
    const usuario = document.getElementById("usuario").value
    const password = document.getElementById("password").value


    if(usuario === usuarioAdmin && password === passAdmin){
        window.location.href = "reserva.html"
    }
    else{
        alert("Usuario o contraseña inválidos")
    }
}
 */

/*---------------FILTRO DE RESERVA ----------------------------  */
document.addEventListener("DOMContentLoaded", function(){
    const formFiltro = document.querySelector('#filtroEstado')


    formFiltro.addEventListener('submit', function(buscaEstado){
        buscaEstado.preventDefault() //manejo el envio del formulario de forma personallizada

        
    })
})

