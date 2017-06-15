
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
						<br><br>
					</div>
					<div class="row">
						<div class="col s12 m2 l2"><div class="amarilla"></div><label id="lblamarilla">SELECCIONAR PROYECTO</label></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="input-field col s12 m12 l12">
									
									<select id="frm_proyecto" name="frm_proyecto">
								    
								        </select>
								 									  
										<div class="d_frm_proyecto"></div>
									
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col s12 m2 l2"><div class="etiquetafrm"><div class="textofrm">NUMERO PROYECTO</div></div></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="opcionesbtn">
									<div class="input-field col s12 m12 l12">
										<input id="frm_num_proyecto" name="frm_num_proyecto" type="text" />
										<label for="frm_num_proyecto">numero Proyecto</label>
										<div class="descripcion"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m2 l2"><div class="etiquetafrm"><div class="textofrm">SECTOR PROYECTO</div></div></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="opcionesbtn">
									<div class="input-field col s12 m12 l12">
										<input id="frm_sector" name="frm_sector" type="text" />
										<label for="frm_sector" id="d_frm_sector">Sector de Proyecto</label>
										<div class="descripcion"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m2 l2"><div class="etiquetafrm"><div class="textofrm">CODIGO BPID INTERNO</div></div></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="opcionesbtn">
									<div class="input-field col s12 m12 l12">
										<input id="frm_localizacion" name="frm_localizacion" type="text" />
										<label for="frm_localizacion">Localizacion Proyecto</label>
										<div class="descripcion"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col s12 m2 l2"><div class="etiquetafrm"><div class="textofrm">VALOR</div></div></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="opcionesbtn">
									<div class="input-field col s12 m12 l12">
										<input id="frm_valor" name="frm_valor" type="text" />
										<label for="frm_valor">Valor Proyecto</label>
										<div class="descripcion"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s2 m2 l2"></div>
						<div class="col s8 m8 l12 center-align">
							<br>
							<button class="btn waves-effect waves-light" onclick="validar()">Enviar
								<i class="material-icons right">send</i>
							</button>
							
							<button class="btn waves-effect waves-light" onclick="Borrar()">Borrar
								<i class="material-icons right">send</i>
							</button>

						<div class="col s2 m2 l2"></div>
					</div>

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