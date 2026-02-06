

<!DOCTYPE HTML>
<HTML lang = "es">
	<HEAD>
		<title> PROYECTO </title>
		<META CHARSET = "utf-8" >
        <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap-icons.css">
		<link rel="stylesheet" href="../css/estilos1.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap">
		<script type="text/javascript" src="JS/funciones1.js"> </script>
		<!-- <?php //include("menu.php"); ?> -->
	</HEAD>
	<BODY> 
		<div class="container ">
            <div class="principal">
            	<?php include("menu.php"); ?> 
            	<?php include("carrusel.php"); ?>
                <div class="row ">
                    <div class="col-8"> <?php include("principal1_1.php"); ?> </div>
                    <div class="col-4"> <?php include("principal1_2.php"); ?> </div>
                </div>
			<?php include("redes.php"); ?>
            </div>
        </div>
        <script type="text/javascript" src="../css/bootstrap/js/bootstrap.bundle.js"></script>	
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</BODY>
</HTML>
