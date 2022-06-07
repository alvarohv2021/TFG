<?php
include_once("../Modelo/m_usuario.php");

if (isset($_POST['password'])) {
    $usuarioUsado = false;
    $correoUsado = false;
    if ($_POST['password'] == $_POST['cPassword']) {

        $cPassword = false;

        if (isset($_POST['name']) && isset($_POST['email']) && $_POST['name'] != '' && $_POST['email'] != '') {

            $estadoInsercion = insertarUsuarios($_POST['name'], $_POST['email'], $_POST['password']);

            if ($estadoInsercion && comprobarNombre($_POST['name'])) {

                $usuarioUsado = true;
            } else if ($estadoInsercion && comprobarCorreo($_POST['email'])) {

                $correoUsado = true;
            } else {

                $usuario = comprobarUsuario($_POST['name'], $_POST['password']);
                if (isset($usuario) && $usuario->id != 0) {

                    $_SESSION['Usuario'] = $usuario;
                    header("Location: ../Controladores/c_provincias.php");
                }
            }
        }
    } else {

        $cPassword = true;
    }
    header("Location: ../Vista/registro.php?cPassword=" . $cPassword . "&usuarioUsado=" . $usuarioUsado . "&correoUsado=" . $correoUsado);
}
