
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BPID</title>
	<?php require_once '../links.php';?>
	<script type="text/javascript" src="../js/formularios/frm_radicar.js"></script>
</head>

<body>

<?php require_once '../menu.php';?>
<form id='frm_radicar' name='frm_radicar' onSubmit="return false"  enctype="multipart/form-data">
<div class="col s12 m11 l9">
			<div class="bajar">
				<div class="container-fluid">

					<div class="row">
						<div class="col s12 m12 l12 center-align"><div class="titulofrm"> RADICAR NUEVO PROYECTO</div></div>
						<br><br>
					</div>
					<div class="row">
						<div class="col s12 m2 l2"><div class="amarilla"></div><label id="lblamarilla">SELECCIONAR MGA</label></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="input-field col s12 m12 l12">
									<div class="opcionesbtn">
										<div class="file-field input-field">
										      <div class="btn">
										        <span>Archivo MGA</span>
										        <input type="file" id="frm_archivo" name="frm_archivo" onchange="archivo_xml()" multiple>
										      </div>
										      <div class="file-path-wrapper">
										        <input class="file-path validate" type="text" placeholder="Upload one or more files">
										      </div>
										  </div>
										<div class="descripcion"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m2 l2"><div class="etiquetafrm"><div class="textofrm">NOMBRE PROYECTO</div></div></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="opcionesbtn">
									<div class="input-field col s12 m12 l12">
									<textarea class="materialize-textarea" id="frm_nom_proyecto" name="frm_nom_proyecto">
									
									</textarea>
          								<label for="textarea1">Nombre Proyecyo</label>
										
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
						<div class="col s12 m2 l2"><div class="etiquetafrm"><div class="textofrm">LOCALIZACION</div></div></div>
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
						<div class="col s12 m2 l2"><div class="etiquetafrm"><div class="textofrm">EJE</div></div></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="opcionesbtn">
									<div class="input-field col s12 m12 l12">
										<input id="frm_eje" name="frm_eje" type="text"  />
										<label for="frm_eje">Eje Proyecto</label>
										<div class="descripcion"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m2 l2"><div class="etiquetafrm"><div class="textofrm">PROGRAMA</div></div></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="opcionesbtn">
									<div class="input-field col s12 m12 l12">
										<input id="frm_programa" name="frm_programa" type="text" />
										<label for="frm_programa">Programa Proyecto</label>
										<div class="descripcion"></div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m2 l2"><div class="etiquetafrm"><div class="textofrm">SUBPROGRAMA</div></div></div>
						<div class="col s12 m10 l10">
							<div class="row">
								<div class="opcionesbtn">
									<div class="input-field col s12 m12 l12">
										<input id="frm_subprograma" name="frm_subprograma"  type="text" />
										<label for="frm_subprograma">Subprograma</label>
										<div class="descripcion"></div>
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
					<!-- MODAL-->
					<div class="container">
						<div class="row">
							<!-- Modal Trigger -->
							<!-- Modal Structure -->
							<div id="modal1" class="modal modal-fixed-footer">
								<div class="modal-content">
									<h4>Lista de Chequeo</h4>
									<p>Aqui va la lista de chequeo, cuando haga click en enviar, los datos van al controlador para ser validados y luego ser insertados en el modelo</p>
									<div class="row">1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore officia placeat velit enim obcaecati fugiat, suscipit sequi, voluptatibus eum consequatur accusamus adipisci laboriosam nulla veritatis vero dolores quo minima? Repudiandae.</div>
									<div class="row">2. FUGIAT EIUS, ANIMI ITAQUE NEMO CULPA MAGNI DESERUNT LABORIOSAM, RECUSANDAE A EX, BEATAE, FACILIS ACCUSAMUS NECESSITATIBUS QUAERAT ELIGENDI SIMILIQUE NULLA IPSUM! NULLA ESSE AMET NON AT EARUM CUMQUE TEMPORA QUAE?</div>
									<div class="row">3. Ducimus vel magnam quis ea explicabo repellat officia quaerat optio qui delectus beatae dolorem voluptatum iusto unde necessitatibus recusandae ut eius inventore quasi, repellendus in maxime. Atque, vero omnis quidem?</div>
									<div class="row">4. PROVIDENT UT, IMPEDIT OBCAECATI MAGNAM LABORIOSAM NOBIS, RATIONE OFFICIA CONSEQUUNTUR BLANDITIIS RERUM NECESSITATIBUS CONSECTETUR SIMILIQUE EIUS NISI NIHIL OPTIO DOLOR EAQUE EXPLICABO VEL APERIAM? MOLESTIAS LABORIOSAM QUOD EXPLICABO, REPELLENDUS INCIDUNT.</div>
								</div>
								<div class="modal-footer">
									<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
									<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Disagree</a>
								</div>
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