<?php

function autoload($clase)
{
   require_once "../" . $clase . ".php";
}
spl_autoload_register('autoload');
//datos de conexion
$manejador = new Conexion_BD();
$conexion=$manejador->getconexion();
$conexion->beginTransaction();//iniciar transaccion
$correcto=1;

$ruta_tmp=	  $_FILES['frm_archivo']['tmp_name'];//ruta temporal del archivo
$nombre=  $_FILES['frm_archivo']['name'];//verificar si el nombre esta bn escrito
$ruta=$ruta_tmp;
$trozos = explode(".", $nombre); 
$extension = end($trozos); //obtener la extencion del archivo
if($extension=="xml" or $extension=="XML")
{
	$datos=simplexml_load_file($ruta);
	$numero_proyecto=utf8_decode($datos->Id);
	$existe=ver_existencia($numero_proyecto);
	echo $existe;
	
}
else
{
	echo "EL ARCHIVO DEBE TENER EXTENCION XML";
}

function ver_existencia($campo)
{
$manejador = new Conexion_BD();
$conexion=$manejador->getconexion();
$query="select count(*) as numero from radicacion where num_proyecto='$campo' and cod_activacion=1";
$resultado=$manejador->consultar($query);
foreach( $resultado  as $r){
   $numero=$r->numero;
							}
return $numero;
}
?>