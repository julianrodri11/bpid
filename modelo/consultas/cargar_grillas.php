<?php
session_start();
function autoload($clase)
{
   require_once "../../modelo/" . $clase . ".php";
}
spl_autoload_register('autoload');
$manejador = new Conexion_BD();
$conexion=$manejador->getconexion();
//$secretaria=ver_secretaria();
$secretaria=1;
list($item,$valor) = explode("-",$_POST['value']);
$correcto=1;
//----
list($item,$valor) = explode("-",$_POST['value']);
  switch (TRUE) {
				    case ($item==1):
				 	$query = "SELECT cod_radicacion,nombre_proyecto FROM radicacion where cod_secretaria=$secretaria and cod_activacion=1 ORDER BY fecha_envio asc";		
						$resultado=$manejador->consultar($query);
						$valores="";	
						foreach( $resultado  as $r){
							$a=1;
						   $cod_radicacion=$r->cod_radicacion;
						   $nom_proyecto=$r->nombre_proyecto;
							if($valores==""){
									$valores=$cod_radicacion.','.$nom_proyecto;
								}else{
									$valores=$valores.';'.$cod_radicacion.','.$nom_proyecto;
								}						
													}
						
							echo $valores;
					
					break;
																							
					default:
					break;
							
									
				}

//-------------------------------------
if($correcto==0){
	$conexion->rollBack();
	$mensaje=-1;
	echo $mensaje;
}
//----------------
function ver_secretaria()
{
	$bd_contratacion=new mBD_CONEX;
	$contratacion=$bd_contratacion->conectar("","","","");
	//--------------
	$sql ="SELECT cod_secretaria FROM usuarios WHERE cod_usuario='".$_SESSION["cod_usuario"]."'
	and cod_activacion!=5";
	$datos=$bd_contratacion->consulta(1,$sql);
	$nr_datos=$bd_contratacion->numRegistros();
	if($datos!=0){
		if($nr_datos==1){
			$cod_activacion=$bd_contratacion->selCampo(1,0,"cod_secretaria");
			if($cod_activacion==0){
				$cod_activacion=-1;
			}
			return $cod_activacion;
		}
	}
// error 
}
$manejador->cerrarConexion();
?>


