<?php

function autoload($clase)
{
   require_once "../" . $clase . ".php";
}
spl_autoload_register('autoload');
$valores = trim(strtoupper($_POST["value"]));
$valores = explode("//", $valores);
//valores de llegada
$datos=trim($valores[0]);
$criterio=trim($valores[1]);
$manejador = new Conexion_BD();
$conexion=$manejador->getconexion();
//$conexion->beginTransaction();//iniciar transaccion
$correcto=1;
if($criterio==0)
{
  $consulta = "select r.cod_radicacion as cod, b.numero_completo as num, r.nombre_proyecto as nombre, substring(r.nombre_proyecto from 1 for 40) || '...' as abr from numero_bpid as b inner join radicacion as r on b.cod_numero_bpid=r.cod_bpid where r.cod_activacion=1 and r.cod_secretaria=1  order by fecha_envio desc  limit 11;";
            
}
else
{
      $consulta = "select r.cod_radicacion as cod, b.numero_completo as num, r.nombre_proyecto as nombre, substring(r.nombre_proyecto from 1 for 40) || '...' as abr from numero_bpid as b inner join radicacion as r on b.cod_numero_bpid=r.cod_bpid where (r.nombre_proyecto like '%".$datos."%' or b.numero_completo like '%".$datos."%')  and r.cod_activacion=1 and r.cod_secretaria=1  order by fecha_envio desc  limit 11;";
            
}
?>
