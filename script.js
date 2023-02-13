let mostrador = document.getElementById("mostrador");
let seleccion = document.getElementById("seleccion");
let imgSeleccionada = document.getElementById("img");
let modSeleccionado = document.getElementById("modelo");
let descSeleecionado = document.getElementById("descripcion");
let precioSeleccionado = document.getElementById("precio");

//Funcion que carga el item seleccionado

function cargar(item){
    quitarBordes(); 

    mostrador.style.width = "60%";
    seleccion.style.width = "40%";
    seleccion.style.opacity = "1";
    item.style.border = "2px solid #379237";

    imgSeleccionada.src = item.getElementsByTagName("img")[0].src;

    modSeleccionado.innerHTML = item.getElementsByClassName("descripcion")[0].innerHTML;

    descSeleecionado.innerHTML = item.getElementsByClassName("detalles")[0].innerHTML;

    precioSeleccionado.innerHTML = item.getElementsByTagName("span")[0].innerHTML;
}

function quitarBordes(){
    var items = document.getElementsByClassName("item");
    for(i=0; i < items.length; i++){
        items[i].style.border = "none";
    }
}

function cerrar(){
    mostrador.style.width = "100%";
    seleccion.style.width = "0%";
    seleccion.style.opacity = "0";
    quitarBordes();

}