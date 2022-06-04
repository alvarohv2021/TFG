<?php include_once("header.html") ?>
<body>
    <?php include_once("barraSuperior.php"); ?>
    <!--**************************Contenido Principal**************************-->
    <div class='container bdorado mt-4 grande'>
        <div class='row'>
            <h1>Carrousel</h1>
        </div>

        <div class='row bazul'>
            <div class='col-12'>
                <p><?php echo $objCasa->getDescripcionBreve() ?></p>
            </div>
            <div class='col-12'>
                <p><?php echo $objCasa->getTipo() ?>/<?php echo $objCasa->getOferta() ?></p>
            </div>

            <div class='col-1'>
                <p><?php echo $objCasa->getHabitaciones() ?> <i class="fa-solid fa-bed"></i></p>
            </div>
            <div class='col-1'>
                <p><?php echo $objCasa->getMetrosCuadrados() ?> <i class="fa-solid fa-ruler-combined"></i></p>
            </div>
            <div class='col-1'>
                <p><?php echo $objCasa->getPrecio() ?>€</p>
            </div>
            <div class='col-12'>
                <p><?php if ($objCasa->getDescripcion() != "") {
                        echo $objCasa->getDescripcion();
                    } else {
                        echo "Esta vivienda no tiene descripción";
                    } ?></p>
            </div>
            <div class="col-9">
                <div>Correo de contacto:
                    <span class="cursor correo" onclick="copiarAlPortapapeles(this)"><?php echo $objCasa->getEmailPropietario() ?></span>
                </div>

            </div>

            <div class="col-1">
                <?php
                $arrayIdUsuarios = getIdUsuariosFromListaFavritosCasa($objCasa->getId());
                if (isset($arrayIdUsuarios)) {
                    if (in_array($usuario->id, $arrayIdUsuarios)) {
                        echo '<i onclick="toggleFavorito(this)" class="fa-solid icono fa-heart cursor"></i>';
                    } else {
                        echo '<i onclick="toggleFavorito(this)" class="fa-regular icono fa-heart cursor"></i>';
                    }
                } else {
                    echo '<i onclick="toggleFavorito(this)" class="fa-regular icono fa-heart cursor"></i>';
                }
                if (isset($usuario)) { ?>
                    <script>
                        function toggleFavorito(x) {
                            if (x.classList[0] == "fa-solid") {
                                x.classList.replace("fa-solid", "fa-regular");
                                this.open("../Controladores/c_casa.php?accion=remove&idCasa=" + <?php echo $objCasa->id ?>, "_self");
                            } else {
                                x.classList.replace("fa-regular", "fa-solid");
                                this.open("../Controladores/c_casa.php?accion=add&idCasa=" + <?php echo $objCasa->id ?>, "_self");
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
                        <i class="fa-solid fa-pen-to-square icono cursor"></i>
                    </a>
                </div>
                <div class="col-1">
                    <a href="../Controladores/c_publicar.php?borrar=true&idCasa=<?php echo $objCasa->id ?>">
                        <i class="fa-solid fa-trash icono cursor"></i>
                    </a>
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