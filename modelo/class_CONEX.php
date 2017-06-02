<?php
class mBD_CONEX{
//
	var $conexion;
   var $Gbd;
    var $ServiceName;
    var $Servidor;
    var $Usuario;
    var $Clave;
    //Identificador de Conexion y de Consulta
    var $Conexion_ID = 0;
    var $Consulta_ID = 0;
    //Numero y Texto del Error
    var $Errno=0;
    var $Error="";
	//Numero de Registros
	var $numRegistros=0;
	//Vector a recorrer
	var $Arreglo_CID1=null;
	var $Arreglo_CID2=null;
	var $Arreglo_CID3=null;		
	var $Arreglo_CID4=null;		
	var $Arreglo_CID5=null;		
	var $Arreglo_CID6=null;		
	var $Arreglo_CID7=null;		
	var $Arreglo_CID8=null;		
	var $Arreglo_CID9=null;		
	var $Arreglo_CID10=null;		
    //Constructor de la Clase
    function mBD_CONEX($bd = 'bpid', $host = 'localhost', $user = 'postgres', $pass = '123456') {
        $this->ServiceName = $bd;
        $this->Servidor = $host;
        $this->Usuario = $user;
        $this->Clave = $pass;
    }

    //Conexin a Base de Datos postgres
    function conectar($bd, $host, $user, $pass){
        if ($bd != "") $this->ServiceName = $bd;
        if ($host != "") $this->Servidor = $host;
        if ($user != "") $this->Usuario = $user;
        if ($pass != "") $this->Clave = $pass;

    //Conectar al Servidor
        $this->Conexion_ID =pg_connect("host=$this->Servidor dbname=$this->ServiceName user=$this->Usuario password=$this->Clave");
        if (!$this->Conexion_ID) {
            $this->Error='Ha fallado la conexion.';
          return 0;
        }
        return $this->Conexion_ID;
    }
	function desconectar(){
		pg_close($this->Conexion_ID);	
	}

    //Obtener un maximo
    function siguiente($sql){
        if ($sql == "") {
            $this->Error='No ha especificado una consulta SQL';
            return 0;
        }
        $this->Consulta_ID = @pg_exec($this->Conexion_ID,$sql);
        if (!$this->Consulta_ID) {
            $this->Error = pg_last_error($this->Conexion_ID);
            return 0;
        }
		$siguiente=pg_result($this->Consulta_ID,0)+1;
        return $siguiente;
    }
 
    //Ejecutar Consulta	
    function consulta($id_arreglo,$sql){
      
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

    function primero()
    {
      mysql_data_seek($this->Consulta_ID,0);
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



?>