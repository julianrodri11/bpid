<script type="text/javascript">
	
	$(document).ready(function()
	{
		$(".button-collapse").sideNav();
	});
	
</script>
<nav class="hide-on-large-only">
	<div class="nav-wrapper light-green darken-2">
	<a href="#!" data-activates="mobile-demo">Mostrar Menú</a>
	<a href="#" class="brand-logo right"><i class="material-icons">settings</i></a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="side-nav" id="mobile-demo">
			<div class="menuizquierda">
			<!--menu oculto cuando la pantalla se hace pequeña-->
				<ul id="ulizquierdo">
					<li class="opciones" ><div class="imgul" onclick="hola()">Crear</div></li>
					<li class="opciones"><div class="imgul"></div></li>
					<li class="opciones"><div class="imgul"></div></li>
					<li class="opciones"><div class="imgul"></div></li>
					<li class="opciones"><div class="imgul"></div></li>
					<li class="opciones"><div class="imgul"></div></li>
					<li class="opciones"><div class="imgul"></div></li>
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
					<li class="opciones"><div class="imgul">USUARIOS</div>
						<ul id="submenu">
							<li ><div class="imgul" onclick="hola()">Crear </div></li>
						</ul>
					</li>
					<!--
					<li class="opciones"><div class="imgul">dsadasd</div></li>
					<li class="opciones"><div class="imgul"></div></li>
					<li class="opciones"><div class="imgul"></div></li>
					<li class="opciones"><div class="imgul"></div></li>
					<li class="opciones"><div class="imgul"></div></li>
					<li class="opciones"><div class="imgul"></div></li>
					-->
				</ul>
			</div>
		</div>
	</nav>
