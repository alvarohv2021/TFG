<?php
include_once('../Modelo/m_provincias.php');
include_once('../Modelo/m_casas.php');
include_once("../Entidades/Usuario.php");


$objProvincias=listaProvincias();
$objCasas=listaCasas();

include_once("../Vista/listado-provincias.php");
?>