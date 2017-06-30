<?php

class m_usuarios
{

    /*
     *FUNCION QUE SIRVE PARA INICIAR SESION
     */
    public function consultarUsuario($parametros)
    {
        //echo "<h1>$correo -- $contrasena</h1>";
        // header('Location: ../vistas/index.php');

        #LLAMO LA CONEXION PARA PODER CONSULTAR A LA BASE DE DATOS
        $modelo   = new Conexion_PDO();
        $conexion = $modelo->get_Conexion_Mysql();
        #PREPARO LA SQL PARA VERIFICAR SI EL USUARIO EXISTE Y ESTA ACTIVO
        $sql       = "SELECT priape,segape,nom from datosiniciales";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $resultados = $statement->fetch();
        // VERIFICA SI EL RESULTADO ES DIFERENTE DE VACIO QUIERE DECIR QUE EL CORREO SI EXISTE Y ESTA ACTIVO
        if ($resultados != '') {

            echo "<br>- "$resultados['priape'];
            echo "<br>- "$resultados['segape'];
            echo "<br>- "$resultados['nom'];
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
    public function insertarUsuario($correo, $contrasena)
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

    public function modificarUsuario()
    {

    }
    public function obtenerUsuario()
    {

    }

}
