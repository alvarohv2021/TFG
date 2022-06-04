<?php
error_reporting(E_ERROR | E_PARSE);

include_once("../Entidades/Usuario.php");
include_once("../Modelo/m_casas.php");


session_start();

$usuario = $_SESSION['Usuario'];



//Compruebo si quiere borrar una casa
if (isset($_GET["borrar"]) && $_GET["borrar"] == true) {

    deleteCasa($_GET["idCasa"]);

    header("Location: ../Controladores/c_provincias.php");
} elseif (isset($_GET["idCasa"])) {

    $_SESSION['idCasa'] = $_GET["idCasa"];

    $objCasa = getCasaById($_GET["idCasa"]);

    /*Comprobacion si es un update*/
} elseif (isset($_SESSION['idCasa'])) {

    $objCasa = getCasaById($_SESSION['idCasa']);
    //Borramos la imagen anterior para poner la nueva
    unlink($objCasa->rutaImagen);
    
    include_once("c_subirImagenes.php");

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
        $usuario->id,
        $target_file
    );

    $_SESSION['idCasa'] = null;

    //header("Location: ../Controladores/c_casas.php?idProvincia=" . $_POST["idProvincia"]);

    /*Comprobando si es un insert en vez de un update*/
} elseif (isset($_POST["tipo"])) {

    include_once("c_subirImagenes.php");

    addCasa(
        $_POST["tipo"],
        $_POST["descripcionBreve"],
        $_POST["descripcion"],
        $_POST["habitaciones"],
        $_POST["precio"],
        $_POST["oferta"],
        $_POST["metros"],
        $_POST["idProvincia"],
        $usuario->id,
        $target_file
    );
    header("Location: ../Controladores/c_casas.php?idProvincia=" . $_POST["idProvincia"] . "&hola");
}
include_once("../Modelo/m_provincias.php");
$objProvincias = listaProvincias();
include_once("../Vista/crear-oferta.php");
