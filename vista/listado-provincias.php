<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <table class="table bazul negro">
        <tr>
            <th>Provincias</th>
            <th>Poblacion</th>
            <th>Densidad (hab/㎢)</th>
            <th>Superficie (㎢)</th>
            <th>Ofertas Disponibles</th>
        </tr>
        <?php
        for ($i = 0; $i < count($objProvincias); $i++) {
            $numCasasProvincia = 0;
            for ($j = 0; $j < count($objCasas); $j++) {
                if ($objCasas[$j]->getProvincia() == $objProvincias[$i]->getId()) {
                    $numCasasProvincia++;
                }
            }
            echo
            "<tr onclick='myFunction(" . $objProvincias[$i]->getId() . ")'>
            <td>" . $objProvincias[$i]->getNombre() . "</td>
            <td>" . $objProvincias[$i]->getPoblacion() . "</td>
            <td>" . $objProvincias[$i]->getDensidad() . "</td>
            <td>" . $objProvincias[$i]->getSuperficie() . "</td>
            <td>" . $numCasasProvincia . "</td>
    </tr>";
        }
        ?>
    </table>

    <!-- Script para hacer de las filas un link que pasara por el metodo $_GET el id de la provincia clicada-->
    <script>
        function myFunction(x) {
            this.open("../Controladores/c_casas.php?idProvincia=" + x, "_self")
        }
    </script>
</body>