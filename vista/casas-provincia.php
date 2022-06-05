<?php include_once("header.html") ?>

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
                <div class='col-3 ' style="padding-left: 0px;">
                    <img src="<?php echo $objCasasProvincia[$i]->getRutaImagen() ?>" alt="">
                </div>
                <div class='col-6'>
                    <div class='row'>
                        <div class='col-12 pt-2'>
                            <a href='../Controladores/c_casa.php?idCasa=<?php echo $objCasasProvincia[$i]->getId() ?>' target="_self">
                                <h3><?php echo $objCasasProvincia[$i]->getDescripcionBreve() ?></h3>
                            </a>
                        </div>
                        <div class='col-12'>
                            <h5><?php echo $objCasasProvincia[$i]->getDescripcion() ?></h5>
                        </div>
                    </div>
                </div>
                <div class='col-3 bazul'>
                    <div class='row'>
                        <div class='col-12'>
                            <h4><?php echo $objCasasProvincia[$i]->getTipo() ?>/<?php echo $objCasasProvincia[$i]->getOferta() ?></h4>
                        </div>
                        <div class='col-12'>
                            <p><?php echo $objCasasProvincia[$i]->getPrecio() ?>€</p>
                        </div>
                        <div class='col-3'>
                            <p><?php echo $objCasasProvincia[$i]->getHabitaciones() ?> <i class="fa-solid fa-bed"></i></p>
                        </div>
                        <div class='col-3'>
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