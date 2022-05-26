<?php

require_once("../BD/bd.php");
include_once("../Entidades/Provincias.php");

function listaProvincias(){
    global $coon;

    $query = $coon->query("SELECT * FROM provincias");
    $arrayCasas = $query->fetch_all(MYSQLI_ASSOC);

    $arrayObjCasas = [];

    for ($i=0; $i < count($arrayCasas); $i++) { 
        $arrayObjCasas[$i] = new Casa($arrayCasas[$i]["id"],$arrayCasas[$i]["Tipo"],
        $arrayCasas[$i]["Descripcion"],$arrayCasas[$i]["Habitaciones"],$arrayCasas[$i]["Precio"],$arrayCasas[$i]["Oferta"]
        ,$arrayCasas[$i]["Metros"],$arrayCasas[$i]["Provincia"],$arrayCasas[$i]["Propietario"]);
    }

    return $arrayObjCasas;
}

$arrayObjCasas=listaProvincias();
var_dump($arrayObjCasas);

?>