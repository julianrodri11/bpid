<?php

require_once '../Conexion_BD.php';

    //session_start();
    
    class ConsultasViabilidad{
        
        private $con;
        
        function __construct() {
            
            $this->con = new Conexion_BD();
            
        }
        
        public function getRadicado($id){
            
            
            $this->con->getConexion();
            
            $consulta = "select * from radicados;";
            
            try{
                $res = $this->con->consultar($consulta);
            } catch (Exception $e) {
                echo 'Error: '.$e;
            }
            
            echo '';
            
        }
        
        public function getRadicados($datos){
            
            $this->con->getConexion();
            
            $consulta = "select r.cod_radicacion as cod, b.numero_completo as num, r.nombre_proyecto as nombre, substring(r.nombre_proyecto from 1 for 40) || '...' as abr from numero_bpid as b inner join radicacion as r on b.cod_numero_bpid=r.cod_bpid where (r.nombre_proyecto like '%".$datos."%' or b.numero_completo like '%".$datos."%')  and r.cod_activacion=1 and r.cod_secretaria=1  order by fecha_envio desc  limit 11;";
            
            try{
                $res = $this->con->consultar($consulta);
            }catch(ErrorException $e){
                echo 'Error: '.$e;
            }
            
            echo '<table>';
            echo '<thead>';
            echo '<tr><th>Código de radicación</th><th>Número</th><th>Nombre del proyecto</th><th>Más</th></tr>';
            echo '</thead>';
            echo '<tbody>';
            
            foreach($res as $fila){
                
                echo '<tr><td>'.$fila->cod.'</td><td>'.$fila->num.'</td><td title="'.$fila->nombre.'">'.$fila->abr.'</td><td><a href="#" title="Ver Más"><div onclick="mas('.$fila->cod.');"><img src="../../vistas/img/anadir.png"></div></a></td></tr>';
                
            }
                  
            echo '</tbody>';
            echo '</table>';
            
        }
        
    }
    
    if(!empty($_POST['value'])){

        $datos = $_POST['value'];
        $viabilidad = new ConsultasViabilidad();
        $viabilidad->getRadicados($datos);
        
    }

?>
