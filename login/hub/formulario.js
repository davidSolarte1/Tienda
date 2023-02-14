const fomrulario = document.getElementById('formulario');
const inputs    = document.querySelectorAll('#formulario input');

const expresiones ={
    cedula: /^\d$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,14}$/ // 7 a 14 numeros.

}


const validarFormulario = () => {
    switch(e.target.name) {
        case "cedula":
        if(expresiones.usuario.test(e.target.value)){

        }   else{
            document 
        }
        break;

        case "fecha":

        break;

        case "nombres":

        break;

        case "apellidos":

        break;

        case "email":

        break;
        
        case "email2":

        break;

        case "pass":

        break;

        case "pass2":

        break;
    }
}



inputs.forEach((input)=> {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

fomrulario.addEventListener('submit', (e) => {
    e.preventDefault();
});