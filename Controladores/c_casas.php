<?php
include_once('../Modelo/m_casas.php');
include_once("../Entidades/Usuario.php");
include_once("../Entidades/Casas.php");

$objCasas=listaCasas();

include_once("../Vista/casas-provincia.php")
?>