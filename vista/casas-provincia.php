<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Spain Homes</title>

    <link href="../imagenes/icono/hause.png" type="text/css" rel="icon">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <script src="https://kit.fontawesome.com/d08437ea27.js" crossorigin="anonymous"></script>
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
    <link href="../estilos/e_colores.css" type="text/css" rel="stylesheet">
    <link href="../estilos/e_casas.css" type="text/css" rel="stylesheet">

</head>

<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>
        <div class="row">
            <h1 class="centrado">
                <?php if (isset($objCasasProvincia[0])) {
                    echo $objCasasProvincia[0]->getProvincia();
                } ?>
            </h1>
        </div>
        <?php
        for ($i = 0; $i < count($objCasasProvincia); $i++) {
        ?>
            <div class='row mb-4 bdorado ofertaCasa'>
                <div class='col-lg-3 col-md-6 col-12 p-0'>
                    <img class="img-fluid" src="<?php echo $objCasasProvincia[$i]->getRutaImagen() ?>" alt="">
                </div>
                <div class='col-lg-6 col-md-6 col-sm-12 col-12'>
                    <div class='row'>
                        <div class='col-12 pt-2'>
                            <a href='../Controladores/c_casa.php?idCasa=<?php echo $objCasasProvincia[$i]->getId() ?>&publicacion=<?php $propietario = $objCasasProvincia[$i]->getPropietario(); if ($propietario == $usuario->id){ echo true;} ?>' target="_self">
                                <h3><?php echo $objCasasProvincia[$i]->getDescripcionBreve() ?></h3>
                            </a>
                        </div>
                        <div class='col-12'>
                            <p><?php echo $objCasasProvincia[$i]->getDescripcion() ?></p>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-12 bazul pt-3'>
                    <div class='row'>
                        <div class='col-12'>
                            <h5><?php echo $objCasasProvincia[$i]->getTipo() ?>/<?php echo $objCasasProvincia[$i]->getOferta() ?></h5>
                        </div>
                        <div class='col-12'>
                            <p><?php echo $objCasasProvincia[$i]->getPrecio() ?>€</p>
                        </div>
                        <div class='col-4'>
                            <p><?php echo $objCasasProvincia[$i]->getHabitaciones() ?> <i class="fa-solid fa-bed"></i></p>
                        </div>
                        <div class='col-4'>
                            <p><?php echo $objCasasProvincia[$i]->getMetrosCuadrados() ?> <i class="fa-solid fa-ruler-combined"></i></p>
                        </div>
                        <div class="col-12">
                            <p><?php echo $objCasasProvincia[0]->getProvincia() ?> <i class="fa-solid fa-map-location-dot"></i></p>
                        </div>
                    </div>
                </div>
            </div>

        <?php

        }
        ?>
    </div>
</body>