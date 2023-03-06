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
    
    
    <main>
        <section class="principal">
            <h2>Bienvenido al himalaya</h2>

            <a href="hub/fphp/cerrarsesion.php">cerrar sesion</a>
        </section>
    </main>
</body>
</html>