<?php
    include 'conection.php';
    $cedula     = $_POST['cedula'];
    $nombres    = $_POST['nombres'];
    $apellidos  = $_POST['apellidos'];
    $nacimiento = $_POST['fecha'];
    $correo     = $_POST['email'];
    $password   = $_POST['pass'];

//encriptar contraseña
    $password   =hash('sha512', $password);

    $query =    "INSERT INTO usuarios(cedula, nombres, apellidos, nacimiento, correo, pass )
                VALUES ('$cedula' ,'$nombres', '$apellidos','$nacimiento', '$correo', '$password')";

//verificar que la cedula no se repita en la base de datos.

    $verificar_ced = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula ='$cedula' ");

    if(mysqli_num_rows($verificar_ced) > 0){
        echo '
        <script>
            alert("Esta cedula ya esta registrada, intenta con otra diferente.");
            window.location ="../registro.php";
        </script>
        ';
        exit();
    }

//verificar que el correo no se repita en la base de datos.

    $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' ");

    if(mysqli_num_rows($verificar_email) > 0){
        echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente.");
            window.location ="../registro.php";
        </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query); 

    if($ejecutar){
        echo '
            <script>
                alert("Te has registrado exitosamente");
                window.location ="../../../index.php";
            </script>
        ';
    }
    else{
        echo '
            <script>
                alert("Intentelo de nuevo, usuario no registrado");
                window.location ="../../../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);


?>