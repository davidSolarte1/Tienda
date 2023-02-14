const formulario = document.getElementById('formulario');
const inputs    = document.querySelectorAll('#formulario input');

const expresiones ={
    cedula: /^\d+$/, // Letras, numeros, guion y guion_bajo
    nombres: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellidos:/^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    

}

const campos = {

    cedula: false,
    
    nombres: false,
    apellidos: false,
    email: false,
    password: false
}

const validarFormulario = (e) => {
    switch(e.target.name) {
        case "cedula":
            validarCampo(expresiones.cedula, e.target, 'usuario');
        break;
/*
        case "fecha":

        break;
*/
        case "nombres":
            validarCampo(expresiones.nombres ,e.target, 'nombres');
        break;

        case "apellidos":
            validarCampo(expresiones.apellidos ,e.target, 'apellidos');
        break;

        case "email":
            validarCampo(expresiones.email ,e.target, 'correo');
            validarEmail2();
        break;
        
        case "email2":
            validarEmail2();
        break;

        case "pass":
            validarCampo(expresiones.password,e.target, 'password');
            validarPassword2();
        break;

        case "pass2":
            validarPassword2();
        break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
        
    }else{
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] =false;
    }

}

const validarEmail2 = () => {
    const inputEmail1 = document.getElementById('email');
    const inputEmail2 = document.getElementById('email2');

    if(inputEmail1.value !== inputEmail2.value){
        document.getElementById(`grupo__correo2`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__correo2`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__correo2 i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__correo2 i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__correo2 .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos['email'] = false;
    }else{
        document.getElementById(`grupo__correo2`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__correo2`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__correo2 i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__correo2 i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__correo2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos['email'] = true;
    }
}

const validarPassword2 = () => {
    const inputPassword1 = document.getElementById('pass');
    const inputPassword2 = document.getElementById('pass2');

    if(inputPassword1.value !== inputPassword2.value){
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos['password'] = false;
    }else{
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos['password'] = true;
    }
}

inputs.forEach((input)=> {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const terminos = document.getElementById('terminos');
    if(campos.cedula && campos.nombres && campos.apellidos && campos.email && campos.password && terminos.checked){
        formulario.reset();

        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);


        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });
    }else{
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});