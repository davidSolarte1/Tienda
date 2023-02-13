<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Siempre hay una primera vez</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="banner">
        <div class="logo">
            <img class="img" src="img/logo-removebg-preview.png" alt="">
        </div>
    </div>
    
    <div class="registro">
        <h2>¡Siempre hay una primera vez!</h2>
        <center>
            <form action="fphp/registro_usuario.php" method="post">
                <table border="0">
                    <tr>
                        <td>
                            Cedula:
                        </td>
                        <td>
                            <input type="text" name="cedula" required>
                        </td>
                        <td>
                            Fecha de Nacimineto:
                        </td>
                        <td>
                            <input type="date" name="fecha" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nombres:
                        </td>
                        <td>
                            <input type="text" name="nombres" required>
                        </td>
                        <td>
                            Apellidos:
                        </td>
                        <td>
                            <input type="text" name="apellidos"required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E-mail:
                        </td>
                        <td>
                            <input type="text" name="email" required>
                        </td>
                        <td>
                            Confirmar E-mail:
                        </td>
                        <td>
                            <input type="text" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contraseña:
                        </td>
                        <td>
                            <input type="password" name="pass" required>
                        </td>
                        <td>
                            Confirmar Contraseña:
                        </td>
                        <td>
                            <input type="password" required>
                        </td>
                    </tr>
                </table>
                
                <br>
                <button class="reg">Registrarme</button>
                <br>
                
            </form>
            <hr>
            <h4>O ingresa con</h4>

            <button class="redes"><a href=""><img class="red" src="https://www.facebook.com/images/fb_icon_325x325.png" alt=""> Facebook</a></button>
            <button class="redes"><a href=""><img class="red" src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Gmail.max-1100x1100.png" alt=""> Google</a></button>
            <button class="redes"><a href=""><img class="red" src="https://help.apple.com/assets/6362E7DEA3F8E977B215F75A/6362E7DFA3F8E977B215F761/es_419/cfef5ce601689564e0a39b4773f20815.png" alt=""> Apple</a></button>
        </center>

    </div>
    
</body>
</html>