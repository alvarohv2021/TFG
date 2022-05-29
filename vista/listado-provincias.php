<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<?php

error_reporting(E_ERROR | E_PARSE);
session_start();
$usuario=$_SESSION['Usuario'];

?>
<!--**************************Barra Superior**************************-->
<div class="container-fluid mb-2">
    <div class="row bg-danger">
        <div class="col-8">
            <h1 class="text-light">Spain Travels</h1>
        </div>
        <?php
        if ($_SESSION['Usuario'] != null) { ?>
            <div class="col-2 pt-3">
                <p class='text-light'><?php echo $_SESSION['Usuario']->username ?></p>
            </div>
            <div class='col-2 pt-3'>
                <a href='../Controladores/logOut.php?sesion=false' class='text-light' style='text-decoration: none'><p>
                        Cerar Sesion</p>
                </a>
            </div>
        <?php } else { ?>
            <div class='col-2 pt-3'>
                <a href='../Controladores/c_inicio.php' class='text-light' style='text-decoration: none'>
                    <p>Iniciar Sesion</p></a>
            </div>
            <div class="col-2 pt-3">
                <!--Por hacer, página de registro-->
                <a href='../Controladores/c_registro.php' class='text-light' style='text-decoration: none'>
                    <p>Registrarse</p></a>
            </div>
        <?php } ?>
    </div>
</div>
<table>
    <tr>
        <th>Provincias</th>
        <th>Poblacion</th>
        <th>Densidad (hab/㎡)</th>
        <th>Superficie (㎢)</th>
        <th>Numero de ofertas</th>
    </tr>
    <?php
for ($i=0; $i < count($objProvincias); $i++) { 
    $numCasasProvincia=0;
    for ($j=0; $j < count($objCasas); $j++) { 
        if ($objCasas[$j]->getProvincia()==$objProvincias[$i]->getId()) {
            $numCasasProvincia++;
        }
    }
    echo 
    "<tr onclick='myFunction(".$objProvincias[$i]->getId().")'>
            <td>".$objProvincias[$i]->getNombre()."</td>
            <td>".$objProvincias[$i]->getPoblacion()."</td>
            <td>".$objProvincias[$i]->getDensidad()."</td>
            <td>".$objProvincias[$i]->getSuperficie()."</td>
            <td>".$numCasasProvincia."</td>
    </tr>";
}
?>
</table>

<!-- Script para hacer de las filas un link que pasara por el metodo $_GET el id de la provincia clicada-->
<script>
function myFunction(x) {
    window.open("../Controladores/c_casas?idProvincia=" + x)
}
</script>
<link href="../estilos/styles.css" type="text/css" rel="stylesheet">