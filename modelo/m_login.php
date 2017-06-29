<?php

class m_login
{

    /*
     *FUNCION QUE SIRVE PARA INICIAR SESION
     */
    public function iniciarSesion($correo, $contrasena)
    {
        //echo "<h1>$correo -- $contrasena</h1>";
        // header('Location: ../vistas/index.php');

        #ENCRIPTO LA CONTRASEÑA CON SHA1 ANTES DE ENVIARLA A LA BASE DE DATOS
        $contrasena = sha1($contrasena);
        #LLAMO LA CONEXION PARA PODER CONSULTAR A LA BASE DE DATOS
        $modelo   = new Conexion_PDO();
        $conexion = $modelo->get_conexion();
        #PREPARO LA SQL PARA VERIFICAR SI EL USUARIO EXISTE Y ESTA ACTIVO
        $sql       = "SELECT correo,contrasena,estado FROM seguridad.login WHERE correo='$correo' AND contrasena='$contrasena' AND estado='ACTIVO'";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $resultados = $statement->fetch();
        // VERIFICA SI EL RESULTADO ES DIFERENTE DE VACIO QUIERE DECIR QUE EL CORREO SI EXISTE Y ESTA ACTIVO
        if ($resultados != '') {
            session_start();
            $_SESSION['estado']  = $resultados['estado'];
            $_SESSION['usuario'] = $resultados['correo'];
            return 1;

            // $_SESSION['identificacion'] = $dato['numeroid'];
            // $_SESSION['nombre']         = $dato['nombre1'];
            // $_SESSION['apellido']       = $dato['apellido1'];
            // header('location:acceso.php');

        } else {
            return 2;
            // echo "Error, verifica tu usuario y contraseña";
            // header('location:../index.php');
        }

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
