
<?php
class Conexion_PDO
{
<<<<<<< HEAD
    public function get_Conexion()
    {
        $motor = "pgsql";
        $user  = "postgres";
        $pass  = "bpid2017";
        $host  = "181.225.96.71";
        $db    = "bpid";
=======
  public function get_Conexion()
  {
    $motor = "pgsql";
    $user  = "postgres";
    $pass  = "bpid2017";
    $host  = "181.225.96.71";
    $db    = "bpid";
>>>>>>> da4d3b1e07e6bb595679bcfdb3153026d8c348dd

        try {
            $conexion = new PDO("$motor:host=$host;dbname=$db;", $user, $pass);
            $conexion->query("SET NAMES 'utf8'");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

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