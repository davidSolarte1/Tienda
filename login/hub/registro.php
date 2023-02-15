<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Siempre hay una primera vez</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <div class="banner">
        <div class="logo">
            <img class="img" src="img/logo-removebg-preview.png" alt="">
        </div>
    </div>
    
    <div class="registro">
        <h2>¡Siempre hay una primera vez!</h2>
        <form action="fphp/registro_usuario.php" method="post" class="formulario" id="formulario">
            
        <div class="formulario__grupo" id="grupo__cedula">
            <label for="user" class="formulario__label">Cedula</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="cedula" id="cedula">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La cedula solo puede contener digitos.</p>
        </div>

        <!-- Grupo: Fecha -->
        <div class="formulario__grupo" id="grupo__fecha">
            <label for="nacim" class="formulario__label">Fecha de Nacimeinto</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fecha"  max="2023-02-14">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La fecha de nacimiento no puede ser mayor a la fecha actual.</p>
        </div>

        <!-- Grupo: Nombres -->
        <div class="formulario__grupo" id="grupo__nombres">
            <label for="nombre" class="formulario__label">Nombres</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombres" >
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Su nombre solo puede contener letras.</p>
        </div>

        <!-- Grupo: Apellidos -->
        <div class="formulario__grupo" id="grupo__apellidos">
            <label for="apellido" class="formulario__label">Apellidos</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="apellidos" >
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Su apellido solo puede contener letras.</p>
        </div>

        <!-- Grupo: Correo Electronico -->
        <div class="formulario__grupo" id="grupo__correo">
            <label for="correo" class="formulario__label">Correo Electrónico</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="email" id="email">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
        </div>

        <!-- Grupo: Correo Electronico 2 -->
        <div class="formulario__grupo" id="grupo__correo2">
            <label for="correo" class="formulario__label">Repetir Correo Electrónico</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="email2" id="email2">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
        </div>

        <!-- Grupo: Contraseña -->
        <div class="formulario__grupo" id="grupo__password">
            <label for="password" class="formulario__label">Contraseña</label>
            <div class="formulario__grupo-input">
                <input type="password" class="formulario__input" name="pass" id="pass">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
        </div>

        <!-- Grupo: Contraseña 2 -->
        <div class="formulario__grupo" id="grupo__password2">
            <label for="password2" class="formulario__label">Repetir Contraseña</label>
            <div class="formulario__grupo-input">
                <input type="password" class="formulario__input" name="pass2" id="pass2">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
        </div>
        <!--
        <div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div> -->
        <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
        <div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn" id="formulario__btn" >Registrarme</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>

        
        

        </form>
    </div>
    <script src="formulario.js"></script>
</body>
</html>