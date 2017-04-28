<?php
session_start();
include '../controlador/funciones.php'
?>
<div id="main_header">
<header>
		<div class="container-fluid"> 
			<div class="row">
				<div class="col l12"><h6><p class="left">Perfil: Nombre Usuario</p>
				<p class="right"><?php 
				$fecha=date('d-m-Y H:i:s');
				$fecha=traduce_fecha($fecha);	
				echo $fecha;
				?>
				</p></h6>
			</div>
		</div>
	</header>
</div>

