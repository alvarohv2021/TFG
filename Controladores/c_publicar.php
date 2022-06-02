<?php
error_reporting(E_ERROR | E_PARSE);

include_once("../Entidades/Usuario.php");

session_start();

$usuario = $_SESSION['Usuario'];


if (isset($_POST["tipo"]) | isset($_POST["descripcion"]) && $_POST["descripcion"] != "") {

    include_once("../Modelo/m_casas.php");

    var_dump(
        $_POST["tipo"],
        $_POST["idProvincia"],
        $_POST["oferta"],
        $_POST["habitaciones"],
        $_POST["precio"],
        $_POST["metros"],
        $_POST["descripcionBreve"],
        $_POST["descripcion"]
    );

    header("Location: ../Controladores/c_casas.php?idProvincia=" . $_POST["idProvincia"]);
} else if ($_POST["tipo"]) {

    include_once("../Modelo/m_casas.php");

    var_dump(addCasa(
        $_POST["tipo"],
        $_POST["descripcionBreve"],
        $_POST["descripcion"],
        $_POST["habitaciones"],
        $_POST["precio"],
        $_POST["oferta"],
        $_POST["metros"],
        $_POST["idProvincia"],
        $usuario->id
    ));

    header("Location: ../Controladores/c_casas.php?idProvincia=" . $_POST["idProvincia"]);
} else {
    include_once("../Modelo/m_provincias.php");
    $objProvincias = listaProvincias();
    include_once("../Vista/crear-oferta.php");
}
