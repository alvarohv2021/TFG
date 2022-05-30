<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/d1d9302ab1.js" crossorigin="anonymous"></script>
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
            <div class='col12'>
                <p>Descripcion</p>
            </div>
        </div>
    </div>

    </div>

</body>

</html>