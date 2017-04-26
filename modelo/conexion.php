<?php

/**
 * Conexion a base de datos con PDO POO MCV
 */
class Conexion
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
   }}

/*$cn = new Conexion();
$cn->get_Conexion();
var_dump($cn);*/
