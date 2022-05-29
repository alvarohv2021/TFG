<?php 
include_once("../BD/BD.php");
include_once("../Entidades/Usuario.php");

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