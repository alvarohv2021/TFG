<?php
include_once('../Modelo/m_casas.php');
include_once("../Entidades/Usuario.php");

$objCasasProvincia=listaCasasProvincia($_GET["idProvincia"]);

include_once("../Vista/casas-provincia.php")
?>