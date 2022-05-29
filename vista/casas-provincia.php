<head>
    <title>Lista de objCasas</title>
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <style>
        .container {
            border: 15px solid #7ebdc2ff;
        }

        .row>div {
            background-color: #efe6ddff;
        }
    </style>
</head>
<?php
$hayobjCasas = false;
for ($i = 0; $i < count($objCasasProvincia); $i++) {
    echo
    "<div class='container'>
            <div class='row'>
                <div class='col-3'>
                    <p>Carrousel</p>
                </div>
                <div class='col-6'>
                    <div class='row'>
                        <div class='col-12'>
                           <a href='casa.php?idCasa=" . $objCasasProvincia[$i]->getId() . "'><p>" . $objCasasProvincia[$i]->getDescripcion() . "</p></a>
                        </div>
                        <div class='col-12'>
                            <p>Descripcion</p>
                        </div>
                    </div>
                </div>
                <div class='col-3'>
                    <div class='row'>
                        <div class='col-12'>
                            <p>" . $objCasasProvincia[$i]->getTipo() . "/" . $objCasasProvincia[$i]->getOferta() . "</p>
                        </div>
                        <div class='col-12'>
                            <p>" . $objCasasProvincia[$i]->getPrecio() . "€</p>
                        </div>
                        <div class='col-6'>
                            <p>" . $objCasasProvincia[$i]->getHabitaciones() . " hab.</p>
                        </div>
                        <div class='col-6'>
                            <p>" . $objCasasProvincia[$i]->getMetrosCuadrados() . " ㎡</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    $hayobjCasas = true;
}
echo "</table>";
if (!$hayobjCasas) {
    echo "<h1>No se encuentran ofertas en esta provincia</h1>";
}
?>