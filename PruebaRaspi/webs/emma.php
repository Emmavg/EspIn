<?php
session_start(); //Se abre en todas las paginas
if(!isset($_SESSION["usr"])){
    header("location:../index.php");
}
if(!isset($_SESSION['preg'])){
    $_SESSION['preg']=0;
    $_SESSION['cont']=0;
    $_SESSION['intent']=0;
}
#Gestion ej1

function ej1 (){
    $redes = array ("Instagram","Twitter","Tumblr","QQ");
    if (!isset ($_REQUEST['Next']) || !isset($_REQUEST['redes'])) {

    echo "<p style='text-align:center'>*Selecciona al menos un campo.</p>";
    }
    else {
        if (isset($_REQUEST['redes']) && ($_REQUEST['redes'] == $redes) && (isset($_REQUEST['Next']))){
            echo "<p style='text-align:center' class='correcto'><b>Respuesta Correcta!!! +1</b></p>";
            $_SESSION['cont']++;
            $_SESSION['preg']++;
            $_SESSION['intent']=0;
            header("location:emma.php");
           
        }
        elseif (isset($_REQUEST['redes']) && ($_REQUEST['redes'] != $redes) && (isset($_REQUEST['Next']))){
            echo "<p style='text-align:center' class='incorrecto'><b>Respuesta Incorrecta</b>, Inténtalo de nuevo!!</p>";
                 $_SESSION['intent']++;    
                 if ($_SESSION['intent']==2){
                     $_SESSION['preg']++;
                     $_SESSION['intent']=0;
                     header("location:emma.php");
                 }
        }
}}

#Gestion ej2

$redes = array ("Instagram","Twitter","Tumblr","QQ");
function ej2(){
    if (isset($_REQUEST['cuadrado']) && ($_REQUEST['cuadrado'] == 'Tumblr') && (isset($_REQUEST['Next']))){
        echo "<p style='text-align:center' class='correcto'><b>Respuesta Correcta!!! +1</b></p>";
        $_SESSION['cont']++;
        $_SESSION['preg']++;
        $_SESSION['intent']=0;
        header("location:emma.php");
        
    }
    elseif (isset($_REQUEST['cuadrado']) &&($_REQUEST['cuadrado'] != 'Tumblr') && (isset($_REQUEST['Next']))){
        echo "<p style='text-align:center' class='incorrecto'><b>Respuesta Incorrecta</b>, Inténtalo de nuevo!!</p>";
        $_SESSION['intent']++;
        if ($_SESSION['intent']==2){
            $_SESSION['preg']++;
            $_SESSION['intent']=0;
            header("location:emma.php");
        }
    }
}

#Gestion ej3

function ej3(){
    if (isset($_REQUEST['rs']) && (($_REQUEST['rs'] == 'Peoople') || ($_REQUEST['rs'] == 'peoople') || ($_REQUEST['rs'] == 'PEOOPLE')) && (isset($_REQUEST['Next']))){
        echo "<p style='text-align:center' class='correcto'><b>Respuesta Correcta!!! +1</b></p>";
        $_SESSION['cont']++;
        $_SESSION['preg']++;
        $_SESSION['intent']=0;
        header("location:emma.php");
        
    }
    elseif (isset($_REQUEST['rs']) && (($_REQUEST['rs'] != 'Peoople') || ($_REQUEST['rs'] != 'peoople') || ($_REQUEST['rs'] != 'PEOOPLE')) && (isset($_REQUEST['Next']))){
        echo "<p style='text-align:center' class='incorrecto'><b>Respuesta Incorrecta</b>, Inténtalo de nuevo!!</p>";
        $_SESSION['intent']++;
        if ($_SESSION['intent']==2){
            $_SESSION['preg']++;
            $_SESSION['intent']=0;
            header("location:emma.php");
        }
    }
}

#Gestion ej4

function ej4(){
    if (isset($_REQUEST['sino']) && ($_REQUEST['sino'] == 'si') && (isset($_REQUEST['Next']))){
        echo "<p style='text-align:center' class='correcto'><b>Respuesta Correcta!!! +1</b></p>";
        $_SESSION['cont']++;
        $_SESSION['preg']++;
        $_SESSION['intent']=0;
        header("location:emma.php");
        
    }
    elseif (isset($_REQUEST['sino']) && ($_REQUEST['sino'] != 'si') && (isset($_REQUEST['Next']))){
        echo "<p style='text-align:center' class='incorrecto'><b>Respuesta Incorrecta</b>, Inténtalo de nuevo!!</p>";
        $_SESSION['preg']++;
        header("location:emma.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Plantilla Bootstrap 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/css.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>¿Cuánto sabes sobre <b>Redes Sociales</b>?</h1> 
</div>

<!--Barra de navegación-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       <?php 
       echo "<a class='navbar-brand'>Usuario: ".$_SESSION["usr"]." </a>";
      ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
    		<ul class="navbar-nav">
        		<li class="nav-item">
        			<a class="nav-link" href="../index.php?salir">Salir</a>
      			</li>
      		</ul>
      	</div>
    </nav>
    <section>
    	 
    	<!-- Pregunta 1 -->
        <?php
        if ($_SESSION['preg']==0){
        	echo "<br>
        	<h5  style='text-align:center'><b>¿ Cuáles de estas Redes Sociales existen ?</b></h5>
        	<br>
        		<form action='emma.php' method='get' id='redes'>
    					<p>
    						<label for='Instagram'><input type='checkbox' name='redes[]' value='Instagram' id='Instagram'> Instagram</label>
    						<label for='Twitter'><input type='checkbox' name='redes[]' value='Twitter' id='Twitter'>Twitter</label>
    					</p>
    					<p>
    						<label for='QX'><input type='checkbox' name='redes[]' value='QX' id='QX'> QX</label>
    						<label for='Pintest'><input type='checkbox' name='redes[]' value='Pintest'id='Pintest'> Pintest</label>
    					</p>
    					<p>
    						<label for='Tumblr'><input type='checkbox' name='redes[]' value='Tumblr' id='Tumblr'> Tumblr</label>
    						<label for='QQ'><input type='checkbox' name='redes[]' value='QQ' id='QQ'> QQ</label>
    						
    					</p>
                		<div  style='text-align: center'  class='container'>
                					<p><input type='submit' class='btn btn-primary' name='Next' value='Siguiente'></p>
                		</div>
    			</form>";
        	
        	    ej1();
    		
        }
        
        // Pregunta 2
        
        elseif ($_SESSION['preg']==1){
            echo "<h5  style='text-align:center'><b>¿ Qué red social no tiene el logo cuadrado ?</b></h5>";
            echo "<br>";
            echo "<form action='emma.php' method='get'>";
            echo "<select name='cuadrado'>";   	        
    	        foreach ($redes as $red)
    	        {
    	            echo "<option name='hola' value='$red'>$red</option>"; //Si todos originalmente tienen el mismo value en el check no hace falta poner el value aqui, y en caso de ponerlo tiene que ser igual que el elemento que saca por pantalla
    	            
    	        };
            echo "</select>";
            echo "<br>";
            echo "<br>
            <div  style='text-align: center'  class='container'>
            <p><input type='submit' class='btn btn-primary' name='Next' value='Siguiente'></p>
            </div>";
            echo "</form>";
            
            ej2();
        }  
        
        // Pregunta 3
        
        elseif ($_SESSION['preg']==2){
            echo "<h5  style='text-align:center'><b>¿ Cuál es esta red social ?</b></h5>
            <br>
            <form action='emma.php' method='get'>
                <img src='../img/logo.png' alt='LogoRedSocial' width=150 height=150 style='display: block; margin:auto;'>
                <br>
                <br>
                <input type='text' class='form-control' id='name' placeholder='Averigua la red social.' name='rs' required>
                <br>
                <div  style='text-align: center'  class='container'>
                    <p><input type='submit' class='btn btn-primary' name='Next' value='Siguiente'></p>
                </div>
            </form>";
            
            ej3();
        }
        
        // Pregunta 4
        
        elseif ($_SESSION['preg']==3){
            echo "<form action='emma.php' method='get'>
            <h5  style='text-align:center'><b>¿ Te ha gustado el formulario ?</b></h5>
            <p>
                <label for ='Si'><input type='radio' name='sino' value='si' id='Si' checked> Si </label>
            </p>
            <p>
                <label for ='No'><input type='radio' name='sino' value='no' id='No'> No </label>
            </p>
        
        
            <div  style='text-align: center'  class='container'>
                <p><input type='submit' class='btn btn-primary' name='Next' value='Siguiente'></p>
            </div>";
            
            ej4();
        }
        
        // Resultado
        
        else{
            echo "<h5  style='text-align:center'><b>Resultado</b></h5>";
            echo "<br>";
            echo "<form action='emma.php' method='get'>";
            if ($_SESSION['cont']<2){
                echo "<p style='text-align:center' class='incorrecto'>Has acertado ".$_SESSION['cont']."/4 preguntas :(</p>";
            }elseif ($_SESSION['cont']<4)
                echo "<p style='text-align:center' class='correcto'>Has acertado ".$_SESSION['cont']."/4 preguntas. Muy bieeen!! :)</p>";
            elseif ($_SESSION['cont']==4)
                echo "<p style='text-align:center' class='correcto'>Eres increíble has acertado todas. Enhorabuena!!!!! :)</p>";
            echo "<div  style='text-align: center'  class='container'>
            <p><input type='submit' class='btn btn-primary' name='Rehacer' value='Volver a hacer el cuestionario'></p>
            </div>";
            if (isset($_REQUEST['Rehacer']))
            header("location:../index.php?salir");
            echo "</form>";
        }
        ?>		 
    </section>
</body>
</html>