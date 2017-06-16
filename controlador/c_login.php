<?php
#validar parametros antes de enviar ...crear funcion
#SE VERIFICA QUE LOS CAMPOS NO ESTEN VACIOS
if (isset($_POST['txt_correo']) and isset($_POST['txt_contrasena'])) {
    #SE VALIDA QUE SEA UN CORREO
    if (filter_var($_POST['txt_correo'], FILTER_VALIDATE_EMAIL)) {
        $correo     = $_POST['txt_correo'];
        $contrasena = $_POST['txt_contrasena'];
        #A LA CONTRASEÑA SE LE QUITAN CARACTERES ESPECIALES PARA QUE NO AYA VULNERABILIDADES
        include_once "funciones.php";
        $contrasena = tildes($contrasena);

        #UNA VEZ LIMPIOS LOS PARAMERTROS SE ENVIAN A CONSULTAR A LA BASE DE DATOS#
        #A TRAVES DE LA FUNCION iniciarSesion()
        #funcion que sirve para cargar automaticamente cualquier clase
        function autoload($clase)
        {
            require_once "../modelo/" . $clase . ".php";
        }
        spl_autoload_register('autoload');
        #SE LLAMA LA CLASE M_LOGIN Y SE ENVIAN LOS PARAMETROS A LA FUNCION iniciarSesion()
        $mensaje = m_login::iniciarSesion($correo, $contrasena);
        if ($mensaje == 1) {
            header('location:../vistas/index.php');
        }if ($mensaje == 2) {
            echo "Error, Verifique su usuario o contraseña, vuelve a intentarlo";
        }

    } else {
        echo ($_POST['txt_correo'] . " Dirección de correo no válida");
    }
}
