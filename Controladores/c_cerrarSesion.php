<?php
session_start();
//***************cierre de sesion***************
if (isset($_GET['sesion'])) {
    if ($_GET['sesion'] == 'false') {
        unset($_SESSION['Usuario']);
    }
}
include_once('../Controladores/c_provincias.php');
