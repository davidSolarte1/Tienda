<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            window.location = "../login/user.html"
        </script>
    ';
   
    session_destroy();
    die();
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="acountstyle.css">
    <script src="https://kit.fontawesome.com/b7395829bd.js" crossorigin="anonymous"></script>

    <title>Mi Cuenta</title>
</head>
<body>
    <div class="banner">
        <div class="fila">
            <div class="logo">
                <a href="../index.php "><img class="img" src="img/logo-removebg-preview.png" alt=""></a>
            </div>
            <div class="buscador">
                <input type="text" class="campo" placeholder="Buscar producto">
            </div>
            <div class="buscar">
                <label for="" class="lupa">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
            </div>
            <div class="acceso">
                <a href="login/user.html" class="boton">
                    <div class="fila">
                        <div class="opt">
                            <label for=""class="botonesban">
                                <i class="fa-regular fa-circle-user"></i>
                            </label>
                        </div> 
                        <div class="texto">
                            Mi Cuenta
                        </div>
                    </div>
                </a>
            </div>
            <div class="linea">
                <hr class="v-line">
            </div>   
            <div class="acceso">
                <a href="../carrito/carrito.php"class="boton">
                    <div class="fila">
                        <div class="opt">
                            <label for=""class="botonesban">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </label>
                        </div>
                        <div class="texto">
                            Ir al Carrito
                        </div>
                    </div> 
                </a>
            </div>   
        </div>
    </div>
    
    <div class="productos">
        <ul class="nav">
            <li class="opc">
                <a href="#">Aseo</a> 
                <ul>
                    <li><a href="#">Limpeza de Ropa</a></li>
                    <li><a href="#">Limpeza de Hogar</a></li>
                    <li><a href="#">Limpeza de Cocina</a></li>
                </ul>
            </li>
            <li class="opc">
                <a href="#"> Cuidado Personal</a>
                <ul>
                    <li><a href="#">Aseo Personal</a></li>
                    <li><a href="#">Cuidado Facial</a></li>

                </ul>
            </li>
            <li class="opc" >
                <a href="#"> Alimentos</a>
                <ul>
                    <li><a href="#">Enlatados</a></li>
                    <li><a href="#">Empaquetados</a></li>
                    <li><a href="#">Refrescos</a></li>
                    <li><a href="#">Granos</a></li>
                </ul>
            </li>
            <li class="opc">
                <a href="#">Medicamentos</a> 
                <ul>
                    <li><a href="#">Jarabes</a></li>
                    <li><a href="#">Pastillas</a></li>
                </ul>

            </li>
            <li class="opc">
                <a href="#">Mascotas</a>
                <ul>
                    <li><a href="#">Comida para Perros</a></li>
                    <li><a href="#">Comida para Gatos</a> </li>
                </ul>
            </li>
        </ul>
    </div>
    <main>
        <section class="principal">
            <h2>Bienvenido al himalaya</h2>

            <a href="hub/fphp/cerrarsesion.php">cerrar sesion</a>
        </section>
    </main>
</body>
</html>