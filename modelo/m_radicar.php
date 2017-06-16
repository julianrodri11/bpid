<?php

class m_radicar
{
   var $cod_ingreso_radicar;
   var $cod_numero_bpid;
   var $numero_proyecto;
   var $nombre_proyecto;
   var $sector;
   var $localizacion;
   var $valor;
   var $eje;
   var $programa;
   var $subprograma;
   var $poai;
   var $entidad_proponente;
   var $entidad_ejecutante;
   var $num_id_responsable;
   var $nom_responsable;
   var $cargo_responsable;
   var $direccion_responsable;
   var $telefono_responsable;
   var $cel_responsable;
   var $correo_responsable;
   var $id_usuario;
   var $nombre_usuario;
   var $observaciones;
   var $cod_usuario_ingreso;
   var $fecha_envio;
   var $hora_envio;
   var $cod_activacion;
   var $cod_secretaria;

function m_radicar()
   {
   $this-> cod_ingreso_radicar=trim($_POST["cod_ingreso_radicar"]);
   $this-> cod_numero_bpid=trim($_POST["cod_numero_bpid"]);
   $this-> numero_proyecto=trim($_POST["numero_proyecto"]);
   $this-> nombre_proyecto=trim($_POST["nombre_proyecto"]);
   $this-> sector=trim($_POST["sector"]);
   $this-> localizacion=trim($_POST["localizacion"]);
   $this-> valor=trim($_POST["valor"]);
   $this-> eje=trim($_POST["eje"]);
   $this-> programa=trim($_POST["programa"]);
   $this-> subprograma=trim($_POST["subprograma"]);
   $this-> poai=trim($_POST["poai"]);
   $this-> entidad_proponente=trim($_POST["entidad_proponente"]);
   $this-> entidad_ejecutante=trim($_POST["entidad_ejecutante"]);
   $this-> num_id_responsable=trim($_POST["num_id_responsable"]);
   $this-> nom_responsable=trim($_POST["nom_responsable"]);
   $this-> cargo_responsable=trim($_POST["cargo_responsable"]);
   $this-> direccion_responsable=trim($_POST["direccion_responsable"]);
   $this-> telefono_responsable=trim($_POST["telefono_responsable"]);
   $this-> cel_responsable=trim($_POST["cel_responsable"]);
   $this-> correo_responsable=trim($_POST["correo_responsable"]);
   $this-> id_usuario=trim($_POST["id_usuario"]);
   $this-> nombre_usuario=trim($_POST["nombre_usuario"]);
   $this-> observaciones=trim($_POST["observaciones"]);
   $this-> cod_usuario_ingreso=trim($_POST["cod_usuario_ingreso"]);
   $this-> fecha_envio=trim($_POST["fecha_envio"]);
   $this-> hora_envio=trim($_POST["hora_envio"]);
   $this-> cod_activacion=trim($_POST["cod_activacion"]);
   $this-> cod_secretaria=trim($_POST["cod_secretaria"]);
   
   } 
   function ingresar_radicar()
   {
$sql="INSERT INTO radicacion(cod_radicacion,cod_bpid,num_proyecto,sector,localizacion,valor,programa,subprograma,poai,entidad_proponente,entidad_ejecutante,
   num_id_responsable,nom_responsable,cargo_responsable,direccion_responsable,telefono_responsable,cel_responsable,correo_responsable,id_usuario,
   nombre_usuario,observaciones,cod_usuario_ingreso,fecha_envio,hora_envio,cod_activacion,nombre_proyecto,eje,cod_secretaria)
VALUES('"
      .$this->cod_ingreso_radicar      ."','"
      .$this->cod_numero_bpid          ."','"
      .$this->numero_proyecto          ."','"
      .$this->sector                   ."','"
      .$this->localizacion             ."','"
      .$this->valor                    ."','"
      .$this->programa                 ."','"
      .$this->subprograma              ."','"
      .$this->poai                     ."','"
      .$this->entidad_proponente       ."','"
      .$this->entidad_ejecutante       ."','"
      .$this->num_id_responsable       ."','"
      .$this->nom_responsable          ."','"
      .$this->cargo_responsable        ."','"
      .$this->direccion_responsable    ."','"
      .$this->telefono_responsable     ."','"
      .$this->cel_responsable          ."','"
      .$this->correo_responsable       ."','"
      .$this->id_usuario               ."','"
      .$this->nombre_usuario           ."','"
      .$this->observaciones            ."','"
      .$this->cod_usuario_ingreso      ."','"
      .$this->fecha_envio              ."','"
      .$this->hora_envio               ."','"
      .$this->cod_activacion           ."','"
      .$this->nombre_proyecto          ."','"
      .$this->eje                      ."','"
      .$this->cod_secretaria           ."')";
      return $sql;
   }
}



?>