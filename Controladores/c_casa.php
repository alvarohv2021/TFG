<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$usuario = $_SESSION['Usuario'];

include_once("../Modelo/m_casas.php");
$objCasa=casa($_GET["idCasa"]);
$objCasa=$objCasa[0];
include_once("../Vista/casa.php");
