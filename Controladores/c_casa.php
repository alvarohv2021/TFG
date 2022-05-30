<?php
error_reporting(E_ERROR | E_PARSE);

include_once("../Entidades/Usuario.php");

session_start();

$usuario = $_SESSION['Usuario'];

include_once("../Modelo/m_casas.php");

$objCasa = getCasaById($_GET["idCasa"]);

include_once("../Vista/casa.php");
