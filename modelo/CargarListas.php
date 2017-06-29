<?php

require_once 'ConexionPDO.php';

class CargarListas{
    
    public static function getListaGeneral(){
        
        $consulta = 'select cod, des from get_lista_general() as ("cod" integer, "des" varchar);';
        
        $con = new ConexionPDO();
        $res = $con->consultar($consulta);
        $con->cerrarConexion();
        
        return $res;
        
    }
    
    public static function getRequisitos($cod){
        
        $consulta = 'select cod, des from get_requisitos('.$cod.') as ("cod" integer, "des" varchar);';
    
        $con = new ConexionPDO();
        $res = $con->consultar($consulta);
        $con->cerrarConexion();
        
        return $res;
        
    }
    
    public static function getSubRequisitos($cod){
        
        $consulta = 'select cod, des from get_sub_requisitos('.$cod.') as ("cod" integer, "des" varchar);';
        
        $con = new ConexionPDO();
        $res = $con->consultar($consulta);
        $con->cerrarConexion();
        
        return $res;
        
    }
    
}

?>

