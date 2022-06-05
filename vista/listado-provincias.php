<?php include_once("header.html") ?>

<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>
        <div class="row">
            <h1 class="centrado">Listado de Provincias</h1>
        </div>
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
                $numOfertas = $objProvincias[$i]->getNumOfertas();


                if ($numOfertas != 0) {
                    echo
                    "<tr class='cursor' onclick='myFunction(" . $objProvincias[$i]->getId() . ")'>
                        <td>" . $objProvincias[$i]->getNombre() . "</td>
                        <td>" . $objProvincias[$i]->getPoblacion() . "</td>
                        <td>" . $objProvincias[$i]->getDensidad() . "</td>
                        <td>" . $objProvincias[$i]->getSuperficie() . "</td>
                        <td>" . $numOfertas . "</td>
                    </tr>";
                }
            }
            ?>
        </table>
    </div>

    <!-- Script para hacer de las filas un link que pasara por el metodo $_GET el id de la provincia clicada-->
    <script>
        function myFunction(x) {
            this.open("../Controladores/c_casas.php?idProvincia=" + x, "_self")
        }
    </script>
</body>