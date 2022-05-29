<?php
include_once('../Modelo/m_provincias.php');
include_once("../Entidades/Usuario.php");
include_once("../Entidades/Provincias.php");
include_once ("../Controladores/c_casas.php");

$objProvincias=listaProvincias();

include_once("../Vista/listado-provincias.php");
?>