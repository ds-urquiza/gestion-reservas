
/* ----------------USUARIO ADMINISTRADOR------------------- */
const usuarioAdmin = "admnistracion@hotel.com"
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

/*-------------------------------------------------------  */
