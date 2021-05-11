<?php
session_start();
if(isset($_COOKIE["cookie_nombre_usr"])){
    $_SESSION["User"] = $_COOKIE["cookie_nombre_usr"];
    // header("location:menu.php");
}

// Declaración de variables
$reg=1;
$pass="true";
?>
<!doctype html>
<html lang="en">

	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <title>Menú</title>
    	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
        <!-- Bootstrap CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<link href="../css/signin.css" rel="stylesheet">
    	<link href="../css/css.css" rel="stylesheet">
 	</head>
 	
	<body class="text-center">
    	<div class="form-signin">
          		<h1 id="1" class="h3 mb-3 font-weight-normal">Elige una opción</h1><br>
          		<!-- Si es la primera vez que entras te lleva a la guía, sino accedes directamente al menú -->
          		<?php
              		echo '<a class="btn btn-lg btn-primary btn-block" href="config.php">Configuración</a><br>';
              		echo '<a class="btn btn-lg btn-primary btn-block" href="#">Ejecutar</a>';
          		?>
          		<p class="mt-5 mb-3 text-muted">&copy; EspIn2021</p>
        </div>
	</body>
	
</html>