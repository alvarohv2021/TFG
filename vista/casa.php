<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/d08437ea27.js" crossorigin="anonymous"></script>
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
    <style>

    </style>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <div class='container bdorado mt-4 grande'>
        <div class='row'>
            <h1>Carrousel</p>
        </div>

        <div class='row bazul'>
            <div class='col-12'>
                <p><?php echo $objCasa->getDescripcion() ?></p>
            </div>
            <div class='col-12'>
                <p><?php echo $objCasa->getTipo() ?>/<?php echo $objCasa->getOferta() ?></p>
            </div>

            <div class='col-1'>
                <p><?php echo $objCasa->getHabitaciones() ?> hab.</p>
            </div>
            <div class='col-1'>
                <p><?php echo $objCasa->getMetrosCuadrados() ?> ㎡</p>
            </div>
            <div class='col-1'>
                <p><?php echo $objCasa->getPrecio() ?>€</p>
            </div>
            <div class='col-11'>
                <p>Descripcion</p>
            </div>
            <div class="col-1">

                <?php
                $arrayIdUsuarios = getIdUsuariosFromListaFavritosCasa($objCasa->getId());
                if (isset($arrayIdUsuarios)) {
                    if (in_array($usuario->id, $arrayIdUsuarios)) {
                        echo '<i onclick="myFunction(this)" class="fa-solid fa-heart"></i>';
                    } else {
                        echo '<i onclick="myFunction(this)" class="fa-regular fa-heart"></i>';
                    }
                } else {
                    echo '<i onclick="myFunction(this)" class="fa-regular fa-heart"></i>';
                }
                if (isset($usuario)) { ?>
                    <script>
                        function myFunction(x) {
                            if (x.classList[0] == "fa-solid") {
                                x.classList.replace("fa-solid", "fa-regular");
                                <?php echo addOrRemoveFromFavoritos($usuario->id, $objCasa->id, "remove") ?>
                            } else {
                                x.classList.replace("fa-regular", "fa-solid");
                                <?php echo addOrRemoveFromFavoritos($usuario->id, $objCasa->id, "add") ?>
                            }
                        }
                    </script>
                <?php } else { ?>
                    <script>
                        function myFunction(x) {
                            this.open("../Vista/registro.php", "_self");
                        }
                    </script>
                <?php } ?>

            </div>
        </div>
    </div>

    </div>

</body>

</html>