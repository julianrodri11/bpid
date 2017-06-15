<?php 

class m_archivos
{
  
  var $cod_ingreso_archivo;
  var $num_programa;
  var $num_proyecto;
  var $cod_bpid;
  var $nombre_real_archivo;
  var $fecha_creacion;
  var $hora_creacion;
  var $cod_activacion;
  var $ruta;
  var $nombre_archivo;
    

     function m_archivos()
   {
   $this-> cod_ingreso_archivo=trim($_POST["cod_ingreso_archivo"]);
   $this-> num_programa=trim($_POST["num_programa"]);
   $this-> num_proyecto=trim($_POST["num_proyecto"]);
   $this-> cod_bpid=trim($_POST["cod_bpid"]);
   $this-> nombre_real_archivo=trim($_POST["nombre_real_archivo"]);
   $this-> ruta=trim($_POST["ruta"]);
   $this-> fecha_envio=trim($_POST["fecha_envio"]);
   $this-> hora_envio=trim($_POST["hora_envio"]);
   $this-> cod_activacion=trim($_POST["cod_activacion"]);
   $this-> nombre_archivo=trim($_POST["nombre_archivo"]);
   }
   function ingresar_archivo()
   {
$sql="INSERT INTO archivos(cod_archivo,ruta,nombre_archivo,nombre_real_archivo,numero_programa,numero_proyecto,
cod_bpid,fecha_creacion,hora_creacion,cod_activacion)VALUES('"
      .$this->cod_ingreso_archivo     ."','"
      .$this->ruta                    ."','"
      .$this->nombre_archivo          ."','"
      .$this->nombre_real_archivo     ."','"
      .$this->num_programa         ."','"
      .$this->num_proyecto            ."','"
      .$this->cod_bpid                ."','"
      .$this->fecha_creacion          ."','"
      .$this->hora_creacion           ."','"
      .$this->cod_activacion          ."')";
      return $sql;
   }
}
?>