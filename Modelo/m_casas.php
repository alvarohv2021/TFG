<?php
require_once("../BD/bd.php");
include_once("../Entidades/Casas.php");

function listaCasas(){
    global $coon;

    $query = $coon->query("SELECT * FROM casas");
    $arrayCasas = $query->fetch_all(MYSQLI_ASSOC);

    $arrayObjCasas = [];

    for ($i=0; $i < count($arrayCasas); $i++) { 
        $arrayObjCasas[$i] = new Casa($arrayCasas[$i]["id"],$arrayCasas[$i]["Tipo"],
        $arrayCasas[$i]["Descripcion"],$arrayCasas[$i]["Habitaciones"],$arrayCasas[$i]["Precio"],$arrayCasas[$i]["Oferta"]
        ,$arrayCasas[$i]["Metros"],$arrayCasas[$i]["Provincia"],$arrayCasas[$i]["Propietario"]);
    }

    return $arrayObjCasas;
}

function listaCasasProvincia($idProvincia){
    global $coon;

    $query = $coon->query("SELECT * FROM casas WHERE Provincia=".$idProvincia);
    $arrayCasas = $query->fetch_all(MYSQLI_ASSOC);

    $arrayObjCasas = [];

    for ($i=0; $i < count($arrayCasas); $i++) { 
        $arrayObjCasas[$i] = new Casa($arrayCasas[$i]["id"],$arrayCasas[$i]["Tipo"],
        $arrayCasas[$i]["Descripcion"],$arrayCasas[$i]["Habitaciones"],$arrayCasas[$i]["Precio"],$arrayCasas[$i]["Oferta"]
        ,$arrayCasas[$i]["Metros"],$arrayCasas[$i]["Provincia"],$arrayCasas[$i]["Propietario"]);
    }

    return $arrayObjCasas;
}

function getCasaById($idCasa){
    global $coon;

    $query = $coon->query("SELECT * FROM casas WHERE id=".$idCasa);
    $arrayCasa = $query->fetch_all(MYSQLI_ASSOC);

    $objCasa = new Casa($arrayCasa[0]["id"],$arrayCasa[0]["Tipo"],
    $arrayCasa[0]["Descripcion"],$arrayCasa[0]["Habitaciones"],$arrayCasa[0]["Precio"],$arrayCasa[0]["Oferta"]
    ,$arrayCasa[0]["Metros"],$arrayCasa[0]["Provincia"],$arrayCasa[0]["Propietario"]);

    return $objCasa;
}
