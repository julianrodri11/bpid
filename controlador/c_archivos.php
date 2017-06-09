<?php
//session_start();
function autoload($clase)
{
   require_once "../modelo/" . $clase . ".php";
}
spl_autoload_register('autoload');
//datos de conexion
$manejador = new Conexion_BD();
$conexion=$manejador->getconexion();
$conexion->beginTransaction();//iniciar transaccion
$archivos=new m_archivos();
$correcto=1;

$num_proyecto=$_POST['frm_num_proyecto'];//numero de proyecto del XML
$cod_bpid=ver_codigo_bpid($num_proyecto);
$archivo_tempo= $_FILES['archivos'];//es la variable de archivos temporales

if(empty($num_proyecto) || empty($cod_bpid) || empty($archivo_tempo))
{
$correcto=6;
}
if($correcto==1)
{
//funcion para cargar archivos	
$enviar=$bd_contra->archivos($num_proyecto,$cod_bpid,$archivo_tempo,'proyectos');
}
if($correcto==1){ 
	
	$mensaje="SU PROCESO SERA PUBLICADO DENTRO DE LAS 4 HORAS HABILES SIGUIENTES :"; 
}
if($correcto==6){ 
	
	$mensaje="ERROR, FALTAN DATOS POR COMPLETAR EN LOS ARCHIVOS :"; 
}
echo $mensaje;





function ver_codigo_bpid($num_proyecto)
{
$manejador = new Conexion_BD();
$conexion=$manejador->getconexion();
$query="select cod_bpid as numero from radicar where num_proyecto='$num_proyecto' ";
$resultado=$manejador->consultar($query);
foreach( $resultado  as $r){
   $numero=$r->numero;
							}
if($numero==""){$numero=1;}
else{$numero=$numero+1;}
return $numero;
}


?>