<?php

class CargarListas{
    
    public static function getListaGeneral(){
        
        $consulta = 'select cod, des from get_lista_general() as ("cod" integer, "des" varchar);';
        
    }
    
    public static function getRequisitos($cod){
        
        $consulta = "";
        
    }
    
    public static function getSubRequisitos($cod){
        
        $consulta = "";
        
    }
    
}

?>

