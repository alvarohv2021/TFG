<?php
include_once("../Modelo/m_usuario.php");

if (isset($_POST['password'])) {

    if ($_POST['password'] == $_POST['cPassword']) {
        $cPassword=false;
        header("Location: ../Vista/registro.php?cPassword=".$cPassword);
       return ;
    }else{
        $cPassword=true;
        header("Location: ../Vista/registro.php?cPassword=".$cPassword);
    }

}

/*if (isset($_POST['password'])) {
    $alertRegistro=false;
    if ($_POST['password'] == $_POST['cPassword']) {
        $cPassword = false;

        if (isset($_POST['name']) & isset($_POST['email'])) {
            $usuario = insertarUsuarios($_POST['name'], $_POST['email'], $_POST['password']);
            if ($usuario) {
                
            }else{
                $alertRegistro=true;
                header("Location: ../Vista/registro.php?alertRegistro=".$alertRegistro);
                return;
            }
        }else{
            $alertRegistro=false;
            var_dump($alertRegistro);
            header("Location: ../Vista/registro.php?alertRegistro=".$alertRegistro);
            return;
        }

    } else {
        $cPassword=true;
        header("Location: ../Vista/registro.php?cPassword=".$cPassword);
        return;
        
    }
}*/
?>