<?php
error_reporting(E_ERROR | E_PARSE);

include_once("../Entidades/Usuario.php");
include_once("../Modelo/m_casas.php");

session_start();

$usuario = $_SESSION['Usuario'];

/*Comprobando si es un insert en vez de un update*/
if (isset($_GET["borrar"]) && $_GET["borrar"] == true) {

    deleteCasa($_GET["idCasa"]);
    header("Location: ../Controladores/c_provincias.php");
} elseif (isset($_GET["idCasa"])) {

    $_SESSION['idCasa'] = $_GET["idCasa"];

    $objCasa = getCasaById($_GET["idCasa"]);

    /*Comprobacion si los parametros estan puestos*/
} elseif (isset($_SESSION['idCasa'])) {
    updateCasa(
        $_SESSION['idCasa'],
        $_POST["tipo"],
        $_POST["descripcionBreve"],
        $_POST["descripcion"],
        $_POST["habitaciones"],
        $_POST["precio"],
        $_POST["oferta"],
        $_POST["metros"],
        $_POST["idProvincia"],
        $usuario->id
    );

    $_SESSION['idCasa'] = null;

    header("Location: ../Controladores/c_casas.php?idProvincia=" . $_POST["idProvincia"]);
} else if (isset($_POST["tipo"])) {

    var_dump("descripcion");

    addCasa(
        $_POST["tipo"],
        $_POST["descripcionBreve"],
        $_POST["descripcion"],
        $_POST["habitaciones"],
        $_POST["precio"],
        $_POST["oferta"],
        $_POST["metros"],
        $_POST["idProvincia"],
        $usuario->id
    );
    header("Location: ../Controladores/c_casas.php?idProvincia=" . $_POST["idProvincia"] . "&hola");
}
include_once("../Modelo/m_provincias.php");
$objProvincias = listaProvincias();
include_once("../Vista/crear-oferta.php");
