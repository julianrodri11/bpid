<?php

class m_numero_banco
{
   var  $cod_ingreso_banco;
    var  $numero_banco;
   var  $cod_departamento;
   var  $fecha_banco;  
   var  $fecha_creacion;
   var  $hora_creacion;
   var  $cod_activacion=1;
   var  $cod_usuario_ingreso;
   var $numero_completo;

function m_numero_banco()
   {
   $this->cod_ingreso_banco=trim($_POST["cod_ingreso_banco"]);
   $this->numero_banco=trim($_POST["numero_banco"]);
   $this->cod_departamento=trim($_POST["cod_departamento"]);
   $this->fecha_banco=trim($_POST["fecha_banco"]);
   $this->fecha_creacion=trim($_POST["fecha_creacion"]);
   $this->hora_creacion=trim($_POST["hora_creacion"]);
   $this->cod_activacion=trim($_POST["cod_activacion"]);
   $this->cod_usuario_ingreso=trim($_POST["cod_usuario_ingreso"]); 
    $this->numero_completo=trim($_POST["numero_completo"]);      
   } 
   function ingresar_banco()
   {
$sql="INSERT INTO numero_bpid(cod_numero_bpid,numero_banco,cod_departamento,fecha_banco,fecha_creacion,hora_creacion,cod_activacion,cod_usuario_bpid,numero_completo)
VALUES('"
.$this->cod_ingreso_banco       ."','"
.$this->numero_banco            ."','"
.$this->cod_departamento         ."','"
.$this->fecha_banco             ."','"
.$this->fecha_creacion          ."','"
.$this->hora_creacion           ."','"
.$this->cod_activacion          ."','"
.$this->cod_usuario_ingreso     ."','"
.$this->numero_completo          ."')";
return $sql;
   }
}

?>