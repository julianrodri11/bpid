<?php

/**
 * Conexion a base de datos con PDO POO MCV
 */
class conexion
{
   public function get_Conexion()
   {
      $motor = "pgsql";
      $user  = "postgres";
      $pass  = "123456";
      $host  = "localhost";
      $db    = "bpid";
      try {
         $conexion = new PDO("$motor:host=$host;dbname=$db;", $user, $pass);
         $conexion->query("SET NAMES 'utf8'");
         $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $conexion;
      } catch (PDOException $e) {
         echo 'Falló la conexión: ' . $e->getMessage();
      }}
      public function cerrar_Conexion()
      {
         self::$conexion = null;
      }
      
      if ($sql == "") {
         $this->Error = 'No ha especificado una consulta SQL';
         return 0;
      }
      $this->Consulta_ID = @pg_exec($this->Conexion_ID,$sql);
      if (!$this->Consulta_ID) {
         $this->Error = @pg_last_error($this->Conexion_ID);
         return 0;
      }
      switch($id_arreglo){
         case 1:{ $this->Arreglo_CID1=pg_fetch_all($this->Consulta_ID); break;}
         case 2:{ $this->Arreglo_CID2=pg_fetch_all($this->Consulta_ID); break;}
         case 3:{ $this->Arreglo_CID3=pg_fetch_all($this->Consulta_ID); break;}
         case 4:{ $this->Arreglo_CID4=pg_fetch_all($this->Consulta_ID); break;}
         case 5:{ $this->Arreglo_CID5=pg_fetch_all($this->Consulta_ID); break;}
         case 6:{ $this->Arreglo_CID6=pg_fetch_all($this->Consulta_ID); break;}
         case 7:{ $this->Arreglo_CID7=pg_fetch_all($this->Consulta_ID); break;}
         case 8:{ $this->Arreglo_CID8=pg_fetch_all($this->Consulta_ID); break;}
         case 9:{ $this->Arreglo_CID9=pg_fetch_all($this->Consulta_ID); break;}
         case 10:{ $this->Arreglo_CID10=pg_fetch_all($this->Consulta_ID); break;}
      }
      $this->numRegistros=pg_numrows($this->Consulta_ID);
      return $this->Consulta_ID;
   }
   //Obtener un campo
   function selCampo($id_arreglo,$indice,$campo){
      $campo=strtolower($campo);
      switch($id_arreglo){
         case 1:{ $val=$this->Arreglo_CID1[$indice][$campo]; break;}
         case 2:{ $val=$this->Arreglo_CID2[$indice][$campo]; break;}
         case 3:{ $val=$this->Arreglo_CID3[$indice][$campo]; break;}
         case 4:{ $val=$this->Arreglo_CID4[$indice][$campo]; break;}
         case 5:{ $val=$this->Arreglo_CID5[$indice][$campo]; break;}
         case 6:{ $val=$this->Arreglo_CID6[$indice][$campo]; break;}
         case 7:{ $val=$this->Arreglo_CID7[$indice][$campo]; break;}
         case 8:{ $val=$this->Arreglo_CID8[$indice][$campo]; break;}
         case 9:{ $val=$this->Arreglo_CID9[$indice][$campo]; break;}
         case 10:{ $val=$this->Arreglo_CID10[$indice][$campo]; break;}
      }
      return $val;
      
   }
   //Obtener Numero de Registros
   function numRegistros(){
      return $this->numRegistros;
   }
   
   function obtenerRegistros()
   {
      $registros=pg_fetch_array($this->Consulta_ID);
      return $registros;
   }
   
   function error() {
      return $this->Error;
   }

   
   //---Funciones de Transaccion
   public function begin() # Abre la transaccion
   {
    pg_query($this->Conexion_ID,"BEGIN WORK");
 }
 
    public function rollback() # Deshace la transaccion
    {
       pg_query($this->Conexion_ID,"ROLLBACK WORK");
    }

    public function commit()
    {
       pg_query($this->Conexion_ID,"COMMIT WORK");
    }     

 }




}
/*
$cn = new Conexion();
$cn->get_Conexion();
var_dump($cn);
 */
