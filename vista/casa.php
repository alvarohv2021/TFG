<?php include_once("header.html") ?>

<body>
    <?php include_once("barraSuperior.php"); ?>
    <!--**************************Contenido Principal**************************-->
    <div class='container mt-4'>
        <div class='row'>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                <img class="img-fluid" src="<?php echo $objCasa->getRutaImagen() ?>" alt="">
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12 bazul">
                <div class="row">
                    <div class='col-12'>
                        <h3><?php echo $objCasa->getDescripcionBreve() ?></h3>
                    </div>
                    <div class='col-12'>
                        <h5><?php if ($objCasa->getDescripcion() != "") {
                                echo $objCasa->getDescripcion();
                            } else {
                                echo "Esta vivienda no tiene descripción";
                            } ?></h5>
                    </div>
                    <div class='col-12'>
                        <h4><?php echo $objCasa->getTipo() ?>/<?php echo $objCasa->getOferta() ?></h4>
                    </div>

                    <div class='col-2'>
                        <p title="Habitaciones"><?php echo $objCasa->getHabitaciones() ?> <i class="fa-solid fa-bed"></i></p>
                    </div>
                    <div class='col-3'>
                        <p title="Metros cuadrados"><?php echo $objCasa->getMetrosCuadrados() ?> <i class="fa-solid fa-ruler-combined"></i></p>
                    </div>
                    <div class='col-3'>
                        <p><?php echo $objCasa->getPrecio() ?> <i class="fa-solid fa-euro-sign"></i></p>
                    </div>
                    <div class='col-4'>
                        <p><?php echo $objCasa->getProvincia() ?> <i class="fa-solid fa-map-location-dot"></i></p>
                    </div>

                    <div class="row">
                        <div class="col-9">
                            <div>Correo de contacto:
                                <span class="cursor correo"><a href="mailto:<?php echo $objCasa->getEmailPropietario() ?>"><?php echo $objCasa->getEmailPropietario() ?></a></span>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-1">
                            <?php
                            $arrayIdUsuarios = getIdUsuariosFromListaFavritosCasa($objCasa->getId());
                            if (isset($arrayIdUsuarios)) {
                                if (in_array($usuario->id, $arrayIdUsuarios)) {
                                    echo '<i title="Eliminar de favoritos" onclick="toggleFavorito(this)" class="fa-solid icono fa-heart cursor"></i>';
                                } else {
                                    echo '<i title="Añadir a favoritos" onclick="toggleFavorito(this)" class="fa-regular icono fa-heart cursor"></i>';
                                }
                            } else {
                                echo '<i title="Añadir a favoritos" onclick="toggleFavorito(this)" class="fa-regular icono fa-heart cursor"></i>';
                            }
                            if (isset($usuario)) { ?>
                                <script>
                                    function toggleFavorito(x) {
                                        if (x.classList[0] == "fa-solid") {
                                            x.classList.replace("fa-solid", "fa-regular");
                                            this.open("../Controladores/c_casa.php?accion=remove&idCasa=<?php echo $objCasa->id ?>&publicacion=<?php $propietario = $objCasa->getPropietario(); if ($propietario == $usuario->id){ echo true;} ?>","_self");
                                        } else {
                                            x.classList.replace("fa-regular", "fa-solid");
                                            this.open("../Controladores/c_casa.php?accion=add&idCasa=<?php echo $objCasa->id ?>&publicacion=<?php $propietario = $objCasa->getPropietario(); if ($propietario == $usuario->id){ echo true;} ?>","_self");
                                        }
                                    }
                                </script>
                            <?php } else { ?>
                                <script>
                                    function toggleFavorito(x) {
                                        this.open("../Vista/registro.php", "_self");
                                    }
                                </script>
                            <?php } ?>
                        </div>

                        <?php
                        if ($publicacion == true) { ?>
                            <div class="col-1">
                                <a href="../Controladores/c_publicar.php?idCasa=<?php echo $objCasa->id ?>">
                                    <i title="Editar oferta" class="fa-solid fa-pen-to-square icono cursor"></i>
                                </a>
                            </div>
                            <div class="col-1">
                                <a href="../Controladores/c_publicar.php?borrar=true&idCasa=<?php echo $objCasa->id ?>">
                                    <i title="Eliminar oferta" class="fa-solid fa-trash icono cursor"></i>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <script>
        function copiarAlPortapapeles(elemento) {
            var correo = elemento.innerHTML;

            navigator.clipboard.writeText(correo);

            alert("Correo: " + correo + " copiado en el protapapeles");
        }
    </script>
</body>

</html>