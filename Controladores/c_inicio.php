<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
include_once("../Modelo/m_usuario.php");

$usuario=comprobarUsuario($_POST['name'], $_POST['password']);
if (isset($usuario)&& $usuario->id!=0) {

    $_SESSION['Usuario'] = $usuario;
    header("Location: ../Controladores/c_provincias.php");

}
include_once("../Vista/inicio.php");