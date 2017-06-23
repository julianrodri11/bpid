<?php
  require_once "ConexionPDO.php";


class MRadicar
{

    public $manejador;
    public $pdo=null;
   
   
    

    public function __construc(){
        $this->manejador = new ConexionPDO();
        //$this->pdo=$this->manejador->conectar();
        
         


    }   
    

   public function ingresarRadicar( $numero_proyecto,
                                    $nombre_proyecto,
                                    $sector,
                                    $localizacion,
                                    $valor,
                                    $eje,
                                    $programa,
                                    $subprograma,
                                    $poai,
                                    $entidad_proponente,
                                    $entidad_ejecutante,
                                    $num_id_responsable,
                                    $nom_responsable,
                                    $cargo_responsable,
                                    $direccion_responsable,
                                    $telefono_responsable,
                                    $cel_responsable,
                                    $correo_responsable,
                                    $id_usuario,
                                    $nombre_usuario,
                                    $observaciones,
                                    $cod_usuario_ingreso,
                                    $cod_secretaria,
                                    $cod_activacion)
   {

    $sql="select from ing_radicacion($cod_activacion,$cod_usuario_ingreso,'$numero_proyecto','$sector','$localizacion','$valor',
                                    '$programa','$subprograma',$poai,'$entidad_proponente','$entidad_ejecutante','$num_id_responsable',
                                    '$nom_responsable','$cargo_responsable','$direccion_responsable','$telefono_responsable','$cel_responsable','$correo_responsable','$id_usuario','$nombre_usuario','$observaciones',$cod_usuario_ingreso,'$nombre_proyecto','$eje',$cod_secretaria)";
     
   $manejador=new ConexionPDO();  
   $resultado=$manejador->afectar($sql);
  $manejador->cerrarConexion();  
      
        return $resultado;
      
   }
}



?>