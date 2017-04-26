<?php
#validar parametros antes de enviar ...crear funcion
$correo     = $_POST['txt_correo'];
$contrasena = $_POST['txt_contrasena'];

function autoload($clase)
{
   require_once "../modelo/" . $clase . ".php";
}
spl_autoload_register('autoload');
//conexion::get_Conexion();

$mensaje = m_login::iniciarSesion($correo, $contrasena);
if ($mensaje == 5) {
   echo "El usuario ya esta registrado con el actual correo, puede recuperar su cuenta ";
} elseif ($mensaje == 6) {
   echo "Error al ingresar el usuario";
} elseif ($mensaje == 3) {
   echo "Usuario registrado correctamente";
}
