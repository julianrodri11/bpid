
<?php
class Conexion_PDO
{

    public function get_Conexion()
    {
        $motor = "pgsql";
        $user  = "postgres";
        $pass  = "bpid2017";
        $host  = "181.225.96.71";
        $db    = "bpid";

        try {
            $conexion = new PDO("$motor:host=$host;dbname=$db;", $user, $pass);
            $conexion->query("SET NAMES 'utf8'");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

    }

    private $motor = "mysql";
    private $user  = "linux";
    private $pass  = "mundolinux";
    private $host  = "190.14.247.68";
    private $db    = "Narino_personas";
    private $pdo;

    public function get_Conexion_Mysql()
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

}
/*  DESCOMENTAR PARA PROBAR SI SE ESTA HACIENDO
 *   BIEN LA CONEXION A LA BASE DE DATOS*/
/*
$mostrar = new Conexion_PDO();
$mostrar->get_Conexion_Mysql();
//var_dump($mostrar);
print_r($mostrar);
 */
?>