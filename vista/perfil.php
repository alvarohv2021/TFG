<?php include_once("header.html") ?>
<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <div class="tab mt-2">
        <button class="eleccion" onclick="openCity(event, 'Favoritos')">Favoritos</button>
        <button class="eleccion" onclick="openCity(event, 'Publicaciones')">Publicaciones</button>
    </div>

    <?php if ($publicaciones != null) { ?>
        <div id="Publicaciones" class="contenido mt-5">
            <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>
                <div class="row ">
                    <div class="col-12 ">
                        <h1>Tus publicaciones</h1>
                        <?php for ($i = 0; $i < count($publicaciones); $i++) { ?>
                            <div class='row bdorado ofertaCasa m-4'>
                                <div class='col-3' style="padding-left: 0px;">
                                    <img src="<?php echo $publicaciones[$i]->getRutaImagen() ?>" alt="">
                                </div>
                                <div class='col-6'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <a href='../Controladores/c_casa.php?publicacion=true&idCasa=<?php echo $publicaciones[$i]->getId() ?>' target="_self">
                                                <p><?php echo $publicaciones[$i]->getDescripcionBreve() ?></p>
                                            </a>
                                        </div>
                                        <div class='col-12'>
                                            <p><?php echo $publicaciones[$i]->getDescripcion() ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-3 bazul'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p><?php echo $publicaciones[$i]->getTipo() ?>/<?php echo $publicaciones[$i]->getOferta() ?></p>
                                        </div>
                                        <div class='col-12'>
                                            <p><?php echo $publicaciones[$i]->getPrecio() ?>€</p>
                                        </div>
                                        <div class='col-4 offset-2'>
                                            <p><?php echo $publicaciones[$i]->getHabitaciones() ?> <i class="fa-solid fa-bed"></i></p>
                                        </div>
                                        <div class='col-4'>
                                            <p><?php echo $publicaciones[$i]->getMetrosCuadrados() ?> <i class="fa-solid fa-ruler-combined"></i></p>
                                        </div>
                                        <div class='col-12'>
                                            <p><?php echo $publicaciones[$i]->getProvincia() ?> <i class="fa-solid fa-map-location-dot"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container bmarron">
            <h1>No has hecho ninguna publicación todavía</h1>
        </div>
    <?php } ?>


    <?php if ($casasFavoritas != null) { ?>
        <div id="Favoritos" class="contenido mt-5">
            <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>
                <div class="row ">
                    <div class="col-12 ">
                        <h1>Casas Favoritas</h1>

                        <?php

                        for ($i = 0; $i < count($casasFavoritas); $i++) {
                        ?>

                            <div class='row bdorado ofertaCasa m-4'>
                                <div class='col-3' style="padding-left: 0px;">
                                    <img class="img-fluid" src="<?php echo $casasFavoritas[$i]->getRutaImagen() ?>" alt="">
                                </div>
                                <div class='col-6'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <a href='../Controladores/c_casa.php?idCasa=<?php echo $casasFavoritas[$i]->getId() ?>' target="_self">
                                                <p><?php echo $casasFavoritas[$i]->getDescripcionBreve() ?></p>
                                            </a>
                                        </div>
                                        <div class='col-12'>
                                            <p><?php echo $casasFavoritas[$i]->getDescripcion() ?></p>
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
                                        <div class='col-4 offset-2'>
                                            <p><?php echo $casasFavoritas[$i]->getHabitaciones() ?> <i class="fa-solid fa-bed"></i></p>
                                        </div>
                                        <div class='col-4'>
                                            <p><?php echo $casasFavoritas[$i]->getMetrosCuadrados() ?> <i class="fa-solid fa-ruler-combined"></i></p>
                                        </div>
                                        <div class='col-12'>
                                            <p><?php echo $casasFavoritas[$i]->getProvincia() ?> <i class="fa-solid fa-map-location-dot"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div id="Favoritos" class="contenido mt-5">
            <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>
                <div class="row ">
                    <div class="col-12 ">
                        <h1>Aun no has agragado ninguna vivienda a favoritos</h1>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <script>
        function openCity(evt, pageSelected) {
            var i, contenido, eleccion;
            contenido = document.getElementsByClassName("contenido");
            for (i = 0; i < contenido.length; i++) {
                contenido[i].style.display = "none";
            }
            eleccion = document.getElementsByClassName("eleccion");
            for (i = 0; i < eleccion.length; i++) {
                eleccion[i].className = eleccion[i].className.replace(" active", "");
            }
            document.getElementById(pageSelected).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</body>

</html>