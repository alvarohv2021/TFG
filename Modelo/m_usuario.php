<?php
include_once("../BD/BD.php");

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

        return false;
    }
}
