<!DOCTYPE html>
<html>
<head>
    <title>Perfil de <?php $usuario->username ?></title>
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>
        <div class="row ">
            <div class="col-12 ">
                <h1>Casas Favoritas</h1>

                <?php
                $hayobjCasas = false;
                for ($i = 0; $i < count($casasFavoritas); $i++) {
                ?>

                    <div class='row bdorado ofertaCasa m-4'>
                        <div class='col-3'>
                            <p>Carrousel</p>
                        </div>
                        <div class='col-6'>
                            <div class='row'>
                                <div class='col-12'>
                                    <a href='../Controladores/c_casa.php?idCasa=<?php echo $casasFavoritas[$i]->getId() ?>' target="_self">
                                        <p><?php echo $casasFavoritas[$i]->getDescripcion() ?></p>
                                    </a>
                                </div>
                                <div class='col-12'>
                                    <p>Descripcion</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-3 bazul'>
                            <div class='row'>
                                <div class='col-12'>
                                    <p><?php echo $casasFavoritas[$i]->getTipo() ?>/<?php echo $casasFavoritas[$i]->getOferta() ?></p>
                                </div>
                                <div class='col-12'>
                                    <p><?php echo $casasFavoritas[$i]->getPrecio() ?>€</p>
                                </div>
                                <div class='col-4'>
                                    <p><?php echo $casasFavoritas[$i]->getHabitaciones() ?> hab.</p>
                                </div>
                                <div class='col-4'>
                                    <p><?php echo $casasFavoritas[$i]->getProvincia() ?></p>
                                </div>
                                <div class='col-4'>
                                    <p><?php echo $casasFavoritas[$i]->getMetrosCuadrados() ?> ㎡</p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>