<script type="text/javascript">
	/*
		*activador para menu
		*/
		$(document).ready(function()
		{
			$(".button-collapse").sideNav();
		});

		function mostrarMenu(parametro)
		{
			switch(parametro)
			{
				case 1: 	$( "#inicio" ).toggle("slow");
				break;
				case 2: 	$( "#radicacion" ).toggle("slow");
				break;
				case 3: 	$( "#viabilidad" ).toggle("slow");
				break;
				case 4: 	$( "#controlposterior" ).toggle("slow");
				break;
				case 5: 	$( "#actualizacion" ).toggle("slow");
				break;
				case 6: 	$( "#ejecucion" ).toggle("slow");
				break;
				case 7: 	$( "#consultas" ).toggle("slow");
				break;
			}

		}
		function ocultarMenu(parametro)
		{
			switch(parametro)
			{
				case 1.1:$( "#inicio" ).toggle("slow");window.location="index.php";break
				case 1.2:$( "#inicio" ).toggle("slow");window.location="index.php";break
				case 1.3:$( "#inicio" ).toggle("slow");window.location="index.php";break
				case 1.4:$( "#inicio" ).toggle("slow");window.location="index.php";break
				case 1.5:$( "#inicio" ).toggle("slow");window.location="index.php";break;
				case 2.1:$( "#radicacion" ).toggle("slow");window.location="index.php";break;
				case 2.2:$( "#radicacion" ).toggle("slow");window.location="index.php";break;
				case 2.3:$( "#radicacion" ).toggle("slow");window.location="index.php";break;
				case 2.4:$( "#radicacion" ).toggle("slow");window.location="index.php";break;
				case 2.5:$( "#radicacion" ).toggle("slow");window.location="index.php";break;
				case 3.1:$( "#viabilidad" ).toggle("slow");window.location="index.php";break;
				case 3.2:$( "#viabilidad" ).toggle("slow");window.location="index.php";break;
				case 3.3:$( "#viabilidad" ).toggle("slow");window.location="index.php";break;
				case 3.4:$( "#viabilidad" ).toggle("slow");window.location="index.php";break;
				case 3.5:$( "#viabilidad" ).toggle("slow");window.location="index.php";break;
				case 4.1:$( "#controlposterior" ).toggle("slow");window.location="index.php";break;
				case 4.2:$( "#controlposterior" ).toggle("slow");window.location="index.php";break;
				case 4.3:$( "#controlposterior" ).toggle("slow");window.location="index.php";break;
				case 4.4:$( "#controlposterior" ).toggle("slow");window.location="index.php";break;
				case 4.5:$( "#controlposterior" ).toggle("slow");window.location="index.php";break;
				case 5.1:$( "#actualizacion" ).toggle("slow");window.location="index.php";break;
				case 5.2:$( "#actualizacion" ).toggle("slow");window.location="index.php";break;
				case 5.3:$( "#actualizacion" ).toggle("slow");window.location="index.php";break;
				case 5.4:$( "#actualizacion" ).toggle("slow");window.location="index.php";break;
				case 5.5:$( "#actualizacion" ).toggle("slow");window.location="index.php";break;
				case 6.1:$( "#ejecucion" ).toggle("slow");window.location="index.php";break;
				case 6.2:$( "#ejecucion" ).toggle("slow");window.location="index.php";break;
				case 6.3:$( "#ejecucion" ).toggle("slow");window.location="index.php";break;
				case 6.4:$( "#ejecucion" ).toggle("slow");window.location="index.php";break;
				case 6.5:$( "#ejecucion" ).toggle("slow");window.location="index.php";break;
				case 7.1:$( "#consultas" ).toggle("slow");window.location="index.php";break;
				case 7.2:$( "#consultas" ).toggle("slow");window.location="index.php";break;
				case 7.3:$( "#consultas" ).toggle("slow");window.location="index.php";break;
				case 7.4:$( "#consultas" ).toggle("slow");window.location="index.php";break;
				case 7.5:$( "#consultas" ).toggle("slow");window.location="index.php";break;

			}

		}

	</script>
	<div class="container-fluid">
	<div class="row ">
		<div class="col s12 m12 l12 barra" >
			<label id="nombresesionsup" >JULIAN RODRIGUEZ</label>
			<label id="fechasupederecha">
				<?php date_default_timezone_set("America/Bogota");
$time = time();
echo date("D d - M m - Y H:i:s:A", $time);
?>
			</label></div>
		</div>
	</div>
	<nav class="hide-on-large-only">
		<div class="nav-wrapper light-green darken-2">
			<a href="#!" data-activates="mobile-demo">Mostrar Menú</a>

			<a href="#" class="brand-logo right"><i class="material-icons">settings</i></a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="side-nav" id="mobile-demo">
				<div class="menuizquierda">
					<!--menu oculto cuando la pantalla se hace pequeña-->
					<ul id="ulizquierdo">
						<li class="opciones"><div class="imgul">INICIO</div></li>
						<li class="opciones"><div class="imgul">RADICACIÓN</div></li>
						<li class="opciones"><div class="imgul">VIABILIDAD</div></li>
						<li class="opciones"><div class="imgul">CONTROL POSTERIOR V.</div></li>
						<li class="opciones"><div class="imgul">ACTUALIZACIÓN</div></li>
						<li class="opciones"><div class="imgul">EJECUCIÓN</div></li>
						<li class="opciones"><div class="imgul">CONSULTAS PROYECTOS</div></li>
						<li class=""><div class="imgusuario"><div id="nombresesion">JULIAN RODRIGUEZ</div></div></li>
					</ul>
				</div>
			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col s12 m2 l2 hide-on-med-and-down">
				<div class="menuizquierda">
					<ul id="ulizquierdo">
						<li class="opciones"><div class="imgul" onclick="mostrarMenu(1)">INICIO</div></li>
						<div id="inicio">
							<li class="opciones opcionesli" onclick="ocultarMenu(1.1)"><div class="imgul">REGISTRAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(1.2)"><div class="imgul">ACTUALIZAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(1.3)"><div class="imgul">BUSCAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(1.4)"><div class="imgul">OPCION X</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(1.5)"><div class="imgul">OPCION Y</div></li>
						</div>
						<li class="opciones"><div class="imgul" onclick="mostrarMenu(2)">RADICACIÓN</div></li>
						<div id="radicacion">
							<li class="opciones opcionesli" onclick="ocultarMenu(2.1)"><div class="imgul">REGISTRAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(2.2)"><div class="imgul">ACTUALIZAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(2.3)"><div class="imgul">BUSCAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(2.4)"><div class="imgul">OPCION X</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(2.5)"><div class="imgul">OPCION Y</div></li>
						</div>
						<li class="opciones"><div class="imgul" onclick="mostrarMenu(3)">VIABILIDAD</div></li>
						<div id="viabilidad">
							<li class="opciones opcionesli" onclick="ocultarMenu(3.1)"><div class="imgul">REGISTRAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(3.2)"><div class="imgul">ACTUALIZAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(3.3)"><div class="imgul">BUSCAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(3.4)"><div class="imgul">OPCION X</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(3.5)"><div class="imgul">OPCION Y</div></li>
						</div>
						<li class="opciones"><div class="imgul" onclick="mostrarMenu(4)">CONTROL POSTERIOR V.</div></li>
						<div id="controlposterior">
							<li class="opciones opcionesli" onclick="ocultarMenu(4.1)"><div class="imgul">REGISTRAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(4.2)"><div class="imgul">ACTUALIZAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(4.3)"><div class="imgul">BUSCAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(4.4)"><div class="imgul">OPCION X</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(4.5)"><div class="imgul">OPCION Y</div></li>
						</div>
						<li class="opciones"><div class="imgul" onclick="mostrarMenu(5)">ACTUALIZACIÓN</div></li>
						<div id="actualizacion">
							<li class="opciones opcionesli" onclick="ocultarMenu(5.1)"><div class="imgul">REGISTRAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(5.2)"><div class="imgul">ACTUALIZAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(5.3)"><div class="imgul">BUSCAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(5.4)"><div class="imgul">OPCION X</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(5.5)"><div class="imgul">OPCION Y</div></li>
						</div>
						<li class="opciones"><div class="imgul" onclick="mostrarMenu(6)">EJECUCIÓN</div></li>
						<div id="ejecucion">
							<li class="opciones opcionesli" onclick="ocultarMenu(6.1)"><div class="imgul">REGISTRAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(6.2)"><div class="imgul">ACTUALIZAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(6.3)"><div class="imgul">BUSCAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(6.4)"><div class="imgul">OPCION X</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(6.5)"><div class="imgul">OPCION Y</div></li>
						</div>
						<li class="opciones"><div class="imgul" onclick="mostrarMenu(7)">CONSULTAS PROYECTOS</div></li>
						<div id="consultas">
							<li class="opciones opcionesli" onclick="ocultarMenu(6.1)"><div class="imgul">REGISTRAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(6.2)"><div class="imgul">ACTUALIZAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(6.3)"><div class="imgul">BUSCAR</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(6.4)"><div class="imgul">OPCION X</div></li>
							<li class="opciones opcionesli" onclick="ocultarMenu(6.5)"><div class="imgul">OPCION Y</div></li>
						</div>
						<li class=""><div class="imgusuario"><div id="nombresesion">JULIAN RODRIGUEZ</div></div></li>
					</ul>
				</div>
			</div>
		</nav>
