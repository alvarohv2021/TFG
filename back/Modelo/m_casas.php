<?php

require_once("../BD/bd.php");
include_once("../Entidades/Provincias.php");

function listaProvincias(){
    global $coon;

    $query = $coon->query("SELECT * FROM provincias");
    $arrayProvincias = $query->fetch_all(MYSQLI_ASSOC);

    $arrayObjProvincias = [];

    for ($i=0; $i < count($arrayProvincias); $i++) { 
        $arrayObjProvincias[$i] = new Provincias($arrayProvincias[$i]["id"],$arrayProvincias[$i]["Nombre"],
        $arrayProvincias[$i]["Poblacion"],$arrayProvincias[$i]["Densidad"],$arrayProvincias[$i]["Superficie"]);
    }

    return $arrayObjProvincias;
}

$arrayObjProvincias=listaProvincias();
var_dump($arrayObjProvincias);

?>