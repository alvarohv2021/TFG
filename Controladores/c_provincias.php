<?php
include_once('../Modelo/m_provincias.php');

$objProvincias=listaProvincias();

include_once("../Vista/listado-provincias.php");
?>