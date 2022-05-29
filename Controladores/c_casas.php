<?php
include_once('../Modelo/m_casas.php');
include_once("../Entidades/Usuario.php");

error_reporting(E_ERROR | E_PARSE);

session_start();
$usuario = $_SESSION['Usuario'];

$objCasasProvincia=listaCasasProvincia($_GET["idProvincia"]);

include_once("../Vista/casas-provincia.php")
?>