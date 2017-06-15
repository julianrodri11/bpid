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
$subirarch=new m_archivos();
$correcto=1;
$num_programa=$_POST['frm_num_programa'];
$num_proyecto=$_POST['frm_num_proyecto'];//numero de proyecto del XML
$cod_bpid=ver_codigo_bpid($num_proyecto);
$numero_bpid=ver_numero_bpid($cod_bpid);
$archivo_tempo= $_FILES['frm_archivo'];//es la variable de archivos temporales


if(empty($num_programa) ||empty($num_proyecto) || empty($cod_bpid) || empty($archivo_tempo))
{
$correcto=6;
}

//FUNCION PARA SUBIR ARCHIVOS
 	$ruta_proyecto="../archivos/proyectos/$num_proyecto";//carpeta del proceso
 	
       if(!file_exists("$ruta_proyecto"))//si la carpeta del proceso no existe
      		{
       			mkdir($ruta_proyecto, 0777, true);
           }  //crea ruta_procso            
     
if($correcto==1){
               $ruta_proyecto=$ruta_proyecto."/".$_FILES['frm_archivo']['name'];
               if(move_uploaded_file($_FILES['frm_archivo']['tmp_name'],$ruta_proyecto)){  
               
               $correcto=1;}          
            else  
              {$correcto=4;}
              }//fin else 

//REGISTRAR ARCHIVOS EN BASE DE DATOS
if($correcto==1)
{

		$subirarch->ruta_tmp= $_FILES['frm_archivo']['tmp_name'];//ruta temporal del archivo
		$nombre_bien=tildes($_FILES['frm_archivo']['name']);//cambiar caracteres especiales
		$nombre=$cod_bpid.$nombre_bien;//cambio los caracteres especiales por normales
		$subirarch->cod_ingreso_archivo=ver_codigo_archivo();
		$subirarch->cod_bpid=$cod_bpid; 
		$subirarch->ruta='ruta'; 
		$subirarch->nombre_archivo=$nombre; 
		$subirarch->nombre_real_archivo=tildes($_FILES['frm_archivo']['name']);//nombre del documento digitado		
		$subirarch->num_programa=$num_programa;
		$subirarch->num_proyecto=$num_proyecto;
		$subirarch->cod_activacion=1;
		$subirarch->fecha_creacion=date("Y-m-d");
		$subirarch->hora_creacion=date("H:i:s",time()-0);
			$sql = $subirarch->ingresar_archivo();
			$insertar=$manejador->consulta(2,$sql); 
			if($insertar==0){
				$correcto=5;


	}
}
if($correcto==1)
{
	$conexion->commit();
	echo "EL NUMERO BPID ASIGNADO ES".$numero_bpid;
}
if($correcto==2)
{
	$conexion->rollBack();
	echo "ERROR,HAY DATOS EN BLANCO QUE DEBEN REGISTRARSE";
}

//FUNCIONES GENERALES DE LA CLASE
function ver_codigo_bpid($num_proyecto)
{
$manejador = new Conexion_BD();
$conexion=$manejador->getconexion();
$query="select cod_bpid as numero from radicacion where num_proyecto='$num_proyecto'";
$resultado=$manejador->consultar($query);
foreach( $resultado  as $r){
   $numero=$r->numero;
							}
return $numero;
}
function ver_numero_bpid($cod_bpid)
{
$manejador = new Conexion_BD();
$conexion=$manejador->getconexion();
$query="select numero_completo as numero from numero_bpid where cod_numero_bpid=$cod_bpid";
$resultado=$manejador->consultar($query);
foreach( $resultado  as $r){
   $numero=$r->numero;
              }
return $numero;
}
//FUNCIONES GENERALES DE LA CLASE
function ver_codigo_archivo()
{
$manejador = new Conexion_BD();
$conexion=$manejador->getconexion();
$query="select max(cod_archivo) as numero from archivos";
$resultado=$manejador->consultar($query);
foreach( $resultado  as $r){
   $numero=$r->numero;
							}
if($numero==""){$numero=1;}
else{$numero=$numero+1;}
return $numero;
}

function tildes($cadena)      
   {  $a_tofind = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'à', 'á', 'â', 'ã', 'ä', 'å',
      'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø',
      'È', 'É', 'Ê', 'Ë', 'è', 'é', 'ê', 'ë', 'Ç', 'ç',
      'Ì', 'Í', 'Î', 'Ï', 'ì', 'í', 'î', 'ï',
      'Ù', 'Ú', 'Û', 'Ü', 'ù', 'ú', 'û', 'ü', 'ÿ', 'Ñ', 'ñ',' ','´',"'",">","<","/","-");
   
      $a_replac = array('A', 'A', 'A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a', 'a' ,
       'O', 'O', 'O', 'O', 'O', 'O', 'o', 'o', 'o', 'o', 'o', 'o'   ,
       'E', 'E', 'E', 'E', 'e', 'e', 'e', 'e', 'C', 'c' ,
       'I', 'I', 'I', 'I', 'i', 'i', 'i', 'i',
       'U', 'U', 'U', 'U', 'u', 'u', 'u', 'u', 'y', 'N', 'n','','_','','','','',"");
   
      $nombreImagen = str_replace($a_tofind, $a_replac, $cadena);
      return $nombreImagen;//    me retorna la cadena sin caracteres especiales
   }
?>