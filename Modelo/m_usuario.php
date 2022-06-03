<?php
include_once("../BD/BD.php");
include_once("../Entidades/Usuario.php");

function comprobarCorreo($email)
{
    global $coon;

    $query = $coon->query("SELECT * FROM usuarios where Email ='" . $email . "'");

    //comprobacion del numero de filas que devuleve la query
    if ($query->num_rows == 0) {
        return false;
    } else {
        return true;
    }
}

function comprobarNombre($nombre)
{
    global $coon;

    $query = $coon->query("SELECT * FROM usuarios where Username ='" . $nombre . "'");

    //comprobacion del numero de filas que devuleve la query
    if ($query->num_rows == 0) {
        return false;
    } else {
        return true;
    }
}

function insertarUsuarios($nombre, $email, $password)
{
    if (comprobarCorreo($email) | comprobarNombre($nombre)) {

        return true;
    } else {

        global $coon;

        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "insert into Usuarios(Email,Username,Password) values ('" . $email . "','" . $nombre . "','" . $password . "')";
        $coon->query($sql);

        $sql = $coon->query("SELECT * FROM usuarios where Username ='" . $nombre . "'");
        return false;
    }
}
function comprobarUsuario($nombre, $password)
{
    global $coon;

    $query = $coon->query("SELECT * FROM usuarios where Username ='" . $nombre . "'");

    $temp = $query->fetch_all(MYSQLI_ASSOC);
    $temp = $temp[0];

    //hasheamos la pasword y la comprobamos con la que hay en la base de datos haseada
    $password_hased = $temp['Password'];


    if (password_verify($password, $password_hased) == true) {
        return new Usuario($temp['id'], $temp['Username'], $temp['Password'], $temp['Email']);
    } else {
        return new Usuario(0, "-", "-", "-");
    }
}

function getListaFavoritos($idUser)
{
    global $coon;

    $query = $coon->query("SELECT casas.* FROM usuarios as usr
    left join favoritos as fav on usr.id = fav.id_usuario
    left join casas on fav.id_casa = casas.id
    where usr.id =" . $idUser);

    $casasFavoritas = $query->fetch_all(MYSQLI_ASSOC);
    for ($i = 0; $i < count($casasFavoritas); $i++) {
        $arrayObjetosCasasFavoritas[$i] = getCasaById($casasFavoritas[$i]['id']);
    }
    return $arrayObjetosCasasFavoritas;
}

function getPublicacionesUsuario($idUser)
{
    global $coon;
    $query = $coon->query("SELECT * FROM casas
    where Propietario = " . $idUser);

    $publicaciones = $query->fetch_all(MYSQLI_ASSOC);

    for ($i = 0; $i < count($publicaciones); $i++) {
        $objCasasPublicaciones[$i] = getCasaById($publicaciones[$i]['id']);
    }

    return $objCasasPublicaciones;
}
