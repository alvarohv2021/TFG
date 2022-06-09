<?php
error_reporting(E_ERROR | E_PARSE);

include_once("../Entidades/Usuario.php");
include_once("../Modelo/m_casas.php");

session_start();

if (isset($_GET['publicar'])) {
    unset($_SESSION['idCasa']);
}

$usuario = $_SESSION['Usuario'];
//Compruebo si quiere borrar una casa
if (isset($_GET["borrar"]) && $_GET["borrar"] == true) {

    $casa = getCasaById($_GET["idCasa"]);

    $directorio = "../imagenes/" . $_SESSION['Usuario']->username . "/" . $casa->id;
    if (rmdir($directorio)) {
        deleteCasa($_GET["idCasa"]);
    };



    header("Location: ../Controladores/c_provincias.php");
} else if (isset($_GET["idCasa"])) {


    $_SESSION['idCasa'] = $_GET["idCasa"];

    $objCasa = getCasaById($_GET["idCasa"]);

    /*Comprobacion si es un update*/
} else if (isset($_SESSION['idCasa'])) {

    $objCasa = getCasaById($_SESSION['idCasa']);

    if ($_FILES["archivo"]["name"] != "") {

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

        unset($_SESSION['idCasa']);
    } else {

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
            $objCasa->rutaImagen
        );

        unset($_SESSION['idCasa']);
    }

    header("Location: ../Controladores/c_casas.php?idProvincia=" . $_POST["idProvincia"]);

    /*Comprobando si es un insert en vez de un update*/
} else if (isset($_POST["tipo"])) {



    $_SESSION['idCasa'] = addCasa(
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

    unset($_SESSION['idCasa']);
    header("Location: ../Controladores/c_casas.php?idProvincia=" . $_POST["idProvincia"] . "&hola");
}
include_once("../Modelo/m_provincias.php");
$objProvincias = listaProvincias();
include_once("../Vista/crear-oferta.php");
