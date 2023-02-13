<?php
    session_start();
    
    include 'conection.php';

    $correo     = $_POST['email'];
    $password   = $_POST['pass'];
    $password   = hash('sha512', $password);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and pass = '$password' ");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] = $correo; 
        header("location: ../../../index.php");
        exit();
    }
    else{
        echo'
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location ="../../user.html";
        </script>
        ';
        exit();
    }

?>