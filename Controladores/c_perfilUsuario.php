<?php
error_reporting(E_ERROR | E_PARSE);

include_once("../Modelo/m_usuario.php");
include_once("../Modelo/m_casas.php");

session_start();

$usuario = $_SESSION['Usuario'];

$casasFavoritas=getListaFavoritos($usuario->id);

include_once("barraSuperior.php");

include_once("../Vista/perfil.php");