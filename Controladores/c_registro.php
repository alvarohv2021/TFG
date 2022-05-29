<?php
include_once("../Modelo/m_usuario.php");

if (isset($_POST['password'])) {
    $usuarioUsado = false;
    $correoUsado = false;
    if ($_POST['password'] == $_POST['cPassword']) {

        $cPassword = false;

        if (isset($_POST['name']) && isset($_POST['email']) && $_POST['name'] != '' && $_POST['email'] != '') {

            $usuario = insertarUsuarios($_POST['name'], $_POST['email'], $_POST['password']);

            if ($usuario && comprobarNombre($_POST['name'])) {

                $usuarioUsado = true;
            } else if ($usuario && comprobarCorreo($_POST['email'])) {

                $correoUsado = true;
            }
        }
    } else {

        $cPassword = true;
    }
    header("Location: ../Vista/registro.php?cPassword=" . $cPassword . "&usuarioUsado=" . $usuarioUsado . "&correoUsado=" . $correoUsado);
}
