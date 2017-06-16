
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BPID</title>
	<?php require_once '../links.php';?>
	<script type="text/javascript" src="../js/formularios/frm_listas_radicar.js"></script>
	<script type="text/javascript" src="../../modelo/fun_propias/validacion_campos.js"></script>
	<script type="text/javascript" src="../../modelo/fun_propias/cargar_grillas.js"></script>
</head>

<body onLoad="cargar_grillas_formulario('frm_proyecto')">
<div id="d_error" title="ALERTA"></div>
<div id="d_ingreso" title="INFORMACION"></div>
<?php require_once '../menu.php';?>
<form id='frm_radicar' name='frm_radicar' onSubmit="return false"  enctype="multipart/form-data">
<div class="col s12 m11 l9">
			<div class="bajar">
				<div class="container-fluid">
					<div class="row">
						<div class="col s12 m12 l12 center-align"><div class="titulofrm"> LISTAS DE CHEQUEO GENERAL</div></div>
					</div>
					
					
					

					</div>
				<!--div class="col s12 m12 l12">
					<?php require_once "footer.php";?>
				</div-->
			</div>
		</div>
	

</div></div></form>

</body>
</html>