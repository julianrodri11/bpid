<?php 


class Conexion_BD extends PDO
{
  
  public $srv ='181.225.96.71';        // PostgreSQL server host
  public $usr ='postgres';        // PostgreSQL user
  public $pas ='bpid2017';    // PostgreSQL password
  public $dba ='bpid';        // PostgreSQL database
  private $prt=5432;  // PostgreSQL port
  private $numrows= null;
  private $conexion;
  private $manejador;
  var $Consulta_ID = 0;
  protected $transactionCount = 0;
  public function __construct() { $this->conectar(); }
  /**
   *
   * @todo Establece la conexión a la Base de datos utilizando PDO.
   *
   * @access private
   *
   **/
   
  private final function conectar() 
  {
    $conex  = null;
    try
        {
          if( is_array( PDO::getAvailableDrivers() ) )
        {
          if( in_array("pgsql",PDO::getAvailableDrivers() ) )
          {
            $conex = new PDO("pgsql:host = $this->srv;port= $this->prt;dbname= $this->dba;user= $this->usr;password= $this->pas");
            $this->setManejador('pgsql');
          }
          else
            throw new PDOException ("No se puede trabajar sin establecer una conexión adecuada con la base de datos de mysql");
        }
        }catch(PDOException $e) 
        {
            error_log( $e->getMessage() ); 
        }
    $this->setConexion( $conex );
  }
  /**
   *
   * @todo Permite obtener datos mediante un arreglo asociativo o de objetos, concatenando las columnas y las tablas.
   
   **/
   
  public final function consultar($consulta)
  {
    $getObjects=false;
    $rt = null;
    try
    {
      $query = $this->conexion->prepare($consulta );
            $query->execute();
            $this->setNumRows( $query->rowCount() );
            $this->cerrarConexion();
            if( $getObjects )
              $rt = $query->fetchAll(PDO::FETCH_ASSOC);
            else
              $rt = $query->fetchAll(PDO::FETCH_OBJ);
    } catch(PDOException $e) {
 
            error_log( $e->getMessage() ); 
 
        }
        return $rt;
  }
  /**
   *
   * @todo Permite obtener datos mediante un arreglo asociativo o de objetos, concatenando las columnas, las tablas, condición y los valores que serán utilizados.
   
   **/
  public final function consultarCondicion($columnas, $tabla, $condicion, $valores)
  {
    $rt = null;
    try
    {
      $query = $this->conexion->prepare( " SELECT " . $columnas . " FROM " . $tabla . " WHERE " . $condicion );
      foreach ($valores as $key => $value) 
      {
        if( !empty( $value ) )
          $query->bindParam( $key, $value, $this->getPDOConstantType( $value ) );
      }
            $query->execute();
            $this->setNumRows( $query->rowCount() );
            $this->cerrarConexion();
              
            $rt = $query->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
 
            error_log( $e->getMessage() ); 
 
        }
        return $rt;
  }
  /**
   *
   * @todo Guarda valores en la tabla que se desee, concatenando las columnas, tabla, campos y los valores que serán utilizados.
   *
   * @access public
   * @param string $tabla
   * @param string $columnas
   * @param string $campos
   * @param mixed  $valores
   *
   * @return int
   *
   **/
   
  public final function agregar($tabla, $columnas, $campos, $valores)
  {
    $rt = null;
    try
    {
      $query = $this->conexion->prepare( "INSERT INTO ".$tabla." (".$columnas.") VALUES (".$campos.")" );
      foreach ($valores as $key => $value) 
      {
        if( !empty( $value ) )
          $query->bindParam( $key, $value, $this->getPDOConstantType( $value ) );
      }
      $rt = $query->execute();
            $this->setNumRows( $query->rowCount() );
            $this->cerrarConexion();
    } catch(PDOException $e){
            error_log( $e->getMessage() ); 
    }
        return $rt;  
  }
  /**
   *
   * @todo Modifica valores en la tabla que se desee, concatenando la tabla, campos, valores y la condicion que sera utilizada para ejecutar esta consulta.
   *
   * @access public
   * @param string $tabla
   * @param string $campos
   * @param mixed $valores
   * @param string $condicion
   *
   * @return int
   *
   **/
   
  public final function actualizar($tabla, $campos, $valores, $condicion)
  {
    $rt = null;
    try
    {
      $query = $this->conexion->prepare( "UPDATE ".$tabla." SET ".$campos." WHERE ".$condicion );
      foreach ($valores as $key => $value) 
      {
        if( !empty( $value ) )
          $query->bindParam( $key, $value, $this->getPDOConstantType( $value ) );
      }
      $rt = $query->execute();
            $this->setNumRows( $query->rowCount() );
            $this->cerrarConexion();
    } catch(PDOException $e){
      
            error_log( $e->getMessage() ); 
    }
        return $rt; 
   
  }
  /**
   *
   * @todo Elimina valores en la tabla que se desee, concatenando la tabla, condicion y los valores que seran utilizados en esta consulta.
   *
   * @access public
   * @param string $tabla
   * @param string $condicion
   * @param mixed $valores
   *
   * @return int
   *
   **/
  public final function eliminar($tabla, $condicion, $valores)
  {
    $rt = null;
    try
    {
      $query = $this->conexion->prepare( "DELETE FROM ".$tabla." WHERE ".$condicion );
      foreach ($valores as $key => $value) 
      {
        if( !empty( $value ) )
          $query->bindParam( $key, $value, $this->getPDOConstantType( $value ) );
      }
      $rt = $query->execute();
            $this->setNumRows( $query->rowCount() );
            $this->cerrarConexion();
    } catch(PDOException $e){
      
            error_log( $e->getMessage() ); 
    }
        return $rt;
   
  }
  
  
  public final function cerrarConexion()
  {
    $this->setConexion(null);
  }
  /**
   *
   * @todo Devuelve la información de la conexión. 
   *
   * @access public
   *
   * @return int
   *
   **/
   
  public final function getConexion()
  {
    return $this->conexion; 
  }
  /**
   *
   * @todo Guarda la información de la conexión a la base de datos. 
   *
   * @access private
   *
   * @param mixed $conexion
   *
   **/
  
  private final function setConexion($conexion)
  {
    $this->conexion = $conexion;
  }
  /**
   *
   * @todo Devuelve el alias del manejador de la base de datos. 
   *
   * @access public
   *
   * @return string
   *
   **/
   
  public final function getManejador()
  {
    return $this->manejador; 
  }
  /**
   *
   * @todo Guarda la información del alias del manejador de la base de datos. 
   *
   * @access private
   *
   * @param string $manejador
   *
   **/
  
  private final function setManejador($manejador)
  {
    $this->manejador  = $manejador;
  }
  /**
   *
   * @todo Guarda la cantidad de filas afectadas en una consulta. 
   *
   * @access public
   *
   * @param int $rows
   *
   **/
  private final function setNumRows( $rows )
  {
    $this->numrows = $rows;
  }
  /**
   *
   * @todo Devuelve la cantidad de filas afectadas en una consulta. 
   *
   * @access public
   *
   * @return int $this->numrows
   *
   **/
  public final function getNumRows()
  {
    return $this->numrows;
  }
  public final function getDba()
  {
    return $this->dba;
  }
  /**
   *
   * @todo Devuelve las constantes definidas por la extensión PDO
   *
   * @access private
   *
   * @param mixed $var
   *
   * @return mixed PDO::PARAM_
   *
   **/
    private function getPDOConstantType( $var )
  {
    if( is_int( $var ) )
      return PDO::PARAM_INT;
    if( is_bool( $var ) )
      return PDO::PARAM_BOOL;
    if( is_null( $var ) )
      return PDO::PARAM_NULL;
    
    return PDO::PARAM_STR;
  }
  //---Funciones de Transaccion
  public function begin($conexion) # Abre la transaccion
        {
        $conexion->beginTransaction();
         }
 
    public function rollback() # Deshace la transaccion
         {
        $conexion->rollBack();
        }
 
    public function commit()
       {
       $conexion->commit();
        }     
function consulta($id_arreglo,$sql){
      
      if ($sql == "") {
        $this->Error = 'No ha especificado una consulta SQL';
        return 0;
      }
      $query = $this->conexion->prepare($sql);
      $this->Consulta_ID =$query->execute();
      if (!$this->Consulta_ID) {
        //PDOException $e;
        //$this->Error = PDOException $e;
        return 0;
      }
      
      $this->setNumRows( $query->rowCount() );
      return $this->Consulta_ID;
    }
}
?>