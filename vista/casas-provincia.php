<head>
    <title>Lista de objCasas</title>
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>


        <div class="row">
            <h1>
                <?php if (isset($objCasasProvincia[0])) {
                    echo $objCasasProvincia[0]->getProvincia();
                } ?>
            </h1>
        </div>
        <?php
        for ($i = 0; $i < count($objCasasProvincia); $i++) {
        ?>
            <div class='row mb-4 bdorado ofertaCasa'>
                <div class='col-3'>
                    <img src="<?php echo $objCasasProvincia[$i]->getRutaImagen() ?>" alt="">
                </div>
                <div class='col-6'>
                    <div class='row'>
                        <div class='col-12'>
                            <a href='../Controladores/c_casa.php?idCasa=<?php echo $objCasasProvincia[$i]->getId() ?>' target="_self">
                                <p><?php echo $objCasasProvincia[$i]->getDescripcionBreve() ?></p>
                            </a>
                        </div>
                        <div class='col-12'>
                            <p><?php echo $objCasasProvincia[$i]->getDescripcion() ?></p>
                        </div>
                    </div>
                </div>
                <div class='col-3 bazul'>
                    <div class='row'>
                        <div class='col-12'>
                            <p><?php echo $objCasasProvincia[$i]->getTipo() ?>/<?php echo $objCasasProvincia[$i]->getOferta() ?></p>
                        </div>
                        <div class='col-12'>
                            <p><?php echo $objCasasProvincia[$i]->getPrecio() ?>€</p>
                        </div>
                        <div class='col-6'>
                            <p><?php echo $objCasasProvincia[$i]->getHabitaciones() ?> hab.</p>
                        </div>
                        <div class='col-6'>
                            <p><?php echo $objCasasProvincia[$i]->getMetrosCuadrados() ?> ㎡</p>
                        </div>
                    </div>
                </div>
            </div>

        <?php

        }
        ?>
    </div>
</body>