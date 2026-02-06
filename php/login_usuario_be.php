<?php 

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    //pasar por encriptamiento contraseña
    //$contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
        and contrasena = '$contrasena' ");
    
    if(mysqli_num_rows($validar_login) > 0){//a encontrado uno
        $_SESION['usuario'] = $correo;
        header("location: login1.php");
        exit;
    }
    else{
        echo '
            <script>
                alert("Usuario no existe, verifique los datos introducidos");
                window.location = "../sesion.php";
            </script>
        ';
        exit;//sale de script
    }



?>