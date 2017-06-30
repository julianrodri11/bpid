
<?php
class ConexionPDO
{

  private $motor="pgsql";
  private $user="postgres";
  private $pass="bpid2017";
  private $host="181.225.96.71";
  private $db="bpid";
  private $pdo;
  

  public function __construct()
  {
   
    try {
      $this->pdo = new PDO("$this->motor:host=$this->host;dbname=$this->db;", $this->user, $this->pass);
      $this->pdo->query("SET NAMES 'utf8'");
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // return $this->pdo;
    } catch (PDOException $e) {
      echo 'Falló la conexión: ' . $e->getMessage();
    }

  }

  public function  consultarValor($sql)
    {

     $rt = null;
    try
        {
          $query = $this->pdo->prepare($sql);
                $query->execute();
                if($res = $query->fetch(PDO::FETCH_OBJ))
               	 	$rt=$rt.$res->numero_completo;
        } catch(PDOException $e) {
     
                error_log( $e->getMessage() ); 
     
            }
        return $rt;
    }

    public function afectar($sql)
    {
      
     $res=0;       
      try {
       
         $this->pdo->exec($sql);
         $res=1;

          } 
      catch(PDOException $e) {
         error_log( $e->getMessage() ); 

    }
    return $res;
  } 
  
  public function cerrarConexion()
  {
      $this->pdo=null;
  }

  //FUNCION Q DEVUELVE VALOR
  public function consultar($sql)
    {

     $rt = null;
    try
        {
          $query = $this->pdo->prepare($sql);
                $query->execute();
                $rt = $query;
               
        } catch(PDOException $e) {
     
                error_log( $e->getMessage() ); 
     
            }
        return $rt;
    }

    public function cantidadRegistros($sql)
    {

     $rt = null;
    try
        {
          $query = $this->pdo->prepare($sql);
                $query->execute();
                $rt =$query->rowCount();
                
               
        } catch(PDOException $e) {
     
                error_log( $e->getMessage() ); 
     
            }
        return $rt;
    }

}
/*  DESCOMENTAR PARA PROBAR SI SE ESTA HACIENDO
 *   BIEN LA CONEXION A LA BASE DE DATOS*/

/*
$mostrar = new Conexion_PDO();
$mostrar->get_Conexion();
var_dump($mostrar);
print_r($mostrar);*/

?>