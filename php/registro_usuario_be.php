<?php 

    include 'conexion_be.php';//acceso

    $nombre = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //encriptar contraseña
    //$contrasena = hash('sha512', $contrasena);

    //INSERTA DATOS EN LA TABALA USUARIOS
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
                VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

    
    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){//condicional para verificar el mismo nombre de corrreo, pasa un parametro
        echo '
            <script>
                alert("Este corrreo ya esta registrado, intenta con otro");
                window.location = "../sesion.php";
            </script>
        ';
        exit();//sale de script
    }

    //verificar que el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){//condicional para verificar el mismo nombre de corrreo, pasa un parametro
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro");
                window.location = "../sesion.php";
            </script>
        ';
        exit();//sale de script
    }



    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../sesion.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Usuario no almacenado ");
                window.location = "../sesion.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>