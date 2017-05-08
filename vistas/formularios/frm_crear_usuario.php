<?php
include("../../Contralador/funciones.php");
session_start();
?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="../img/bpid.ico" type="image/x-icon" rel="shortcut icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GOBERNACION DE NARIÑO</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="../css/materialize.min.css" rel="stylesheet" media="screen">
	<link href="../css/formulario.css" rel="stylesheet" media="screen">
	<script src="../js/jquery-3.2.1.js"></script>
	<script src="../js/materialize.min.js"></script>
</head>
<body>
	<header>
		<div class="container-fluid"> 
			<div class="row">
				<div class="col l12"><h6><p class="right"><?php 
				$fecha=date('d-m-Y H:i:s');$fecha=traduce_fecha($fecha);
				echo $fecha;?>
			</p></h6></div>
		</div>
	</header>
</div>
<div class="row">
	<div class="col l2">Aqui va el menu</div>
	<div class="col l2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
	<div class="col l6">
				<form >
						
						<div class="input-field col s12 l12 m12">
							
							<input id="icon_prefix" type="text" class="validate">
							<label for="icon_prefix">Nombres</label>
						</div>
					</form>
</div>


	</div>
	
</div>
	







</body>
</html>

