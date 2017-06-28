<?php
  require_once "ConexionPDO.php";


class MArchivos
{

    public $manejador;
    public $pdo=null;
   
   
     public function __construc(){
        $this->manejador = new ConexionPDO();
           


    }   
    

   public function ingresarArchivos($ruta,
                                    $nombre_archivo,
                                    $nombre_real,
                                    $numero_programa,
                                    $numero_proyecto   )
   {

    $sql="select from ing_archivos('$ruta','$nombre_archivo','$nombre_real','$numero_programa','$numero_proyecto')";
     
   $manejador=new ConexionPDO();  
   $resultado=$manejador->consultar($sql);
   $manejador->cerrarConexion();  
   return $resultado->fecth(PDO::FETCH_BOTH);
      
   }
}



?>