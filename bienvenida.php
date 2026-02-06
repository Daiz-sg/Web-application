<?php
    session_start();//Sera necesario iniciar sesion para entara a esta pagina

    if(isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "sesion.php";
            </script>
        ';
        //header("location: sesion.php");
        session_destroy();
        die();
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDA</title>
    
</head>
<body>
    <h1>Bienvenid@ !!</h1>
    <a href = "php/cerrar_sesion.php"> Cerrar Sesión </a>




</body>
</html>