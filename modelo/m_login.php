<?php

class m_login
{

   /*
   FUNCION QUE SIRVE PARA INICIAR SESION
    */
   public function iniciarSesion($usuario, $contrasena)
   {
      echo "<h1>$usuario -- $contrasena</h1>";
   }

   #funcion que sirve para insertar login
   public function insertarLogin($correo, $contrasena)
   {
      /*$contrasena     = sha1($contrasena);
   $modelo         = new Conexion();
   $conexion       = $modelo->get_conexion();
   $verifcarcorreo = $modelo->get_campo("login", "correo", "correo", $correo);
   if (strtolower($verifcarcorreo) == null) {
   //echo "puede registrar";
   $maxid     = $modelo->get_ultimovalor("login", "idlogin");
   $sql       = "INSERT INTO login(idlogin,correo,contrasena) VALUES(:idlogin,:correo,:contrasena)";
   $statement = $conexion->prepare($sql);
   $statement->bindParam(':idlogin', $maxid);
   $statement->bindParam(':correo', $correo);
   $statement->bindParam(':contrasena', $contrasena);
   if (!$statement) {
   return "6";
   } else {
   $statement->execute();
   return "3";
   }
   } else {
   return "5";
   }*/
   }

   public function desactivarLogin($parametro)
   {
      echo $parametro;
   }

   public function modificarLogin()
   {

   }
   public function obtenerLatos()
   {

   }
   public function eliminarLogin()
   {

   }

}
