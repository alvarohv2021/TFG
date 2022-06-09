<?php include_once("header.html") ?>

<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>
        <div class="row">
            <div class="col-12">
                <h1 class="centrado">Listado de Provincias</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive bazul">
                    <?php
                    for ($i = 0; $i < count($objProvincias); $i++) {
                        $numOfertas = $objProvincias[$i]->getNumOfertas();

                        if ($numOfertas != 0) { ?>

                            <tr class='cursor' onclick='myFunction(<?php echo $objProvincias[$i]->getId() ?>)'>
                                <td title="Provincia"> <?php echo $objProvincias[$i]->getNombre() ?> </td>
                                <td title="Población"> <?php echo $objProvincias[$i]->getPoblacion() ?> <i class="fa-solid fa-users"></i></td>
                                <td title="Densidad de poblacion (hab/km2)"> <?php echo $objProvincias[$i]->getDensidad() ?> <i class="fa-solid fa-users-rectangle"></i></td>
                                <td title="Superficie (km2)"> <?php echo $objProvincias[$i]->getSuperficie() ?> <i class="fa-solid fa-ruler-combined"></i></td>
                                <td title="Ofertas"> <?php echo $numOfertas ?> <i class="fa-solid fa-house"></i></td>
                            </tr>

                    <?php }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Script para hacer de las filas un link que pasara por el metodo $_GET el id de la provincia clicada-->
    <script>
        function myFunction(x) {
            this.open("../Controladores/c_casas.php?idProvincia=" + x, "_self")
        }
    </script>
</body>