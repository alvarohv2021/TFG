<?php
require_once("../BD/bd.php");
include_once("../Entidades/Provincias.php");

function listaProvincias()
{
    global $coon;

    $query = $coon->query("SELECT * FROM provincias");
    $arrayProvincias = $query->fetch_all(MYSQLI_ASSOC);

    $arrayObjProvincias = [];

    for ($i = 0; $i < count($arrayProvincias); $i++) {
        $arrayObjProvincias[$i] = new Provincias(
            $arrayProvincias[$i]["id"],
            $arrayProvincias[$i]["Nombre"],
            $arrayProvincias[$i]["Poblacion"],
            $arrayProvincias[$i]["Densidad"],
            $arrayProvincias[$i]["Superficie"]
        );
    }

    return $arrayObjProvincias;
}

function getProvinciaById($idProvincia)
{
    global $coon;

    $query = $coon->query("SELECT * FROM provincias WHERE id=" . $idProvincia);
    $arrayProvincias = $query->fetch_all(MYSQLI_ASSOC);

    $provincia = new Provincias(
        $arrayProvincias[0]["id"],
        $arrayProvincias[0]["Nombre"],
        $arrayProvincias[0]["Poblacion"],
        $arrayProvincias[0]["Densidad"],
        $arrayProvincias[0]["Superficie"]
    );

    return $provincia;
}
