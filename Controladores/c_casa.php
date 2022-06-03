<?php
error_reporting(E_ERROR | E_PARSE);

include_once("../Entidades/Usuario.php");

session_start();

$usuario = $_SESSION['Usuario'];

include_once("../Modelo/m_casas.php");

$objCasa = getCasaById($_GET["idCasa"]);
if (isset($_GET["publicacion"]) | $_GET["publicacion"] != "") {
    $publicacion = true;
} else {
    $publicacion = false;
}

if (isset($_GET['accion'])) {
    addOrRemoveFromFavoritos($usuario->id, $objCasa->id, $_GET['accion']);
}

include_once("../Vista/casa.php");
