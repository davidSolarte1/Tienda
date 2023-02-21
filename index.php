


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b7395829bd.js" crossorigin="anonymous"></script>
    
    <title>Donde Manuelita</title>
</head>
<body>
    <div class="banner">
        <div class="fila">
            <div class="logo">
                <a href="index.php "><img class="img" src="img/logo-removebg-preview.png" alt=""></a>
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
                <a href="login/acount.php" class="boton">
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
                <a href="carrito/carrito.php"class="boton">
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
            <div class="mostrador" id="mostrador">
                <div id="fila">
                    <div class="item" onclick="cargar(this)">
                        <div class="contenedor_foto">
                            <img src="img/ArrozDiana.png" alt="">
                            <p class="descripcion">Arroz Diana blanco x5kg</p>
                            <p class="detalles">Proporciónale todo el amor a tu familia con el delicioso Arroz Diana</p>
                            <span class="precio">$ 23.490</span>
                        </div>
                    </div>
                    <div class="item" onclick="cargar(this)">
                        <div class="contenedor_foto">
                            <img src="img/AtunVanCamps.png" alt="">
                            <p class="descripcion">Atún En Aceite Van Camps x 160g</p>
                            <p class="detalles">Atun Van Camps Lomitos Aceite, delicioso y nutritivo perfecto para acompañar tus comidas y crear maravillosas recetas y deleitar tu paladar y el de los tuyos.</p>
                            <span class="precio">$ 8.500</span>
                        </div>
                    </div>
                    <div class="item" onclick="cargar(this)">
                        <div class="contenedor_foto">
                            <img src="img/Savital.png" alt="">
                            <p class="descripcion">Shampoo savital anticaspa menta euca.sabila x 550ml</p>
                            <p class="detalles">Shampoo savital anticaspa menta eucalipto-sabila</p>
                            <span class="precio">$ 18.590</span>
                        </div>
                    </div>
                    <div class="item" onclick="cargar(this)">
                        <div class="contenedor_foto">
                            <img src="img/DogChow.png" alt="">
                            <p class="descripcion">Alimento Dog Chow para adultos y razas pequeñas</p>
                            <p class="detalles">Que tu mascota se alimente con el mas nutritivo y delicioso sabor de este magnífico producto.</p>
                            <span class="precio">$ 11.747</span>
                        </div>
                    </div>
                    <div class="item" onclick="cargar(this)">
                        <div class="contenedor_foto">
                            <img src="img/Suavitel.png" alt="">
                            <p class="descripcion">Suavizante Suavitel Cuidado Superior Fresca Primavera x3L</p>
                            <p class="detalles">Evita malos olores y texturas ásperas en tu ropa.</p>
                            <span class="precio">$  26.590</span>
                        </div>
                    </div>
                    <div class="item" onclick="cargar(this)">
                        <div class="contenedor_foto">
                            <img src="img/Aceta.png" alt="">
                            <p class="descripcion">Acetaminophen 500mg x 100 TB</p>
                            <p class="detalles">Alivio confiable y efectivo del dolor y fiebre.</p>
                            <span class="precio">$ 13.000</span>
                        </div>
                    </div>
                    
                </div>
                
            </div>

            <!--Contenedor del item seleccionado-->

            <div class="seleccion" id="seleccion">
                <div class="cerrar" onclick="cerrar()">
                    &#x2715
                </div>
                <div class="info"> 
                    <img src="img/ArrozDiana.png" alt="" id="img">
                    <h2 id="modelo">Arroz Diana </h2>
                    <p class="car">Características principales:</p>
                    <p id="descripcion">Descripcion del producto</p>
                    <span class="precio" id="precio">$2.500</span>
                    <button>AGREGAR AL CARRITO</button>
                </div>
            </div>
        </section>
    </main>
    
    <footer>

    </footer>

    <script src="script.js"></script>
</body>


</html>
