<?php include_once("header.html") ?>

<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->

    <div class="container casasProvincia centrado bmarron p-5 pt-1 mt-4">
        <h1>Publicar tu anuncio de particular gratis</h1>
        <form method="POST" class="bazul p-3" action="../Controladores/c_publicar.php" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-12">
                    <label>
                        <h4 for="tipo">Elige tipo de inmueble</h4>
                    </label>
                </div>
                <div class="col-2 offset-3 btn">
                    <select name="tipo" id="tipo" required>
                        <option value="">Seleccione</option>
                        <option value="Apartamento" <?php echo $objCasa->tipo == ("Apartamento") ? "selected" : ""; ?>>Apartamento</option>
                        <option value="Ático" <?php echo $objCasa->tipo == ("Ático") ? "selected" : ""; ?>>Ático</option>
                        <option value="Piso" <?php echo $objCasa->tipo == ("Piso") ? "selected" : ""; ?>>Piso</option>
                        <option value="Bajo" <?php echo $objCasa->tipo == ("Bajo") ? "selected" : ""; ?>>Bajo</option>
                        <option value="Casa" <?php echo $objCasa->tipo == ("Casa") ? "selected" : ""; ?>>Casa</option>
                        <option value="Chalet" <?php echo $objCasa->tipo == ("Chalet") ? "selected" : ""; ?>>Chalet</option>
                    </select>
                </div>
                <div class="col-2">
                    <p>en</p>
                </div>
                <div class="col-1 btn">
                    <select name="idProvincia" id="idProvincia" required>
                        <option value="">Seleccione</option>
                        <?php

                        for ($i = 0; $i < count($objProvincias); $i++) { ?>

                            <option value="<?php echo $objProvincias[$i]->id ?>" <?php echo $objCasa->provincia == ($objProvincias[$i]->id) ? "selected" : ""; ?>><?php echo $objProvincias[$i]->nombre ?></option>

                        <?php } ?>
                    </select>

                </div>


            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <h5>Seleccione Operacion:</h5>
                </div>
                <div class="form-check col-1 offset-4">
                    <input class="form-check-input" type="radio" id="Venta" name="oferta" value="Venta" required <?php echo $objCasa->oferta == "Venta" ? "checked" : ""; ?>>
                    <label class="form-check-label" for="Venta">Venta</label>
                </div>
                <div class="form-check col-1 offset-2">
                    <input class="form-check-input" type="radio" id="Alquiler" name="oferta" value="Alquiler" required <?php echo $objCasa->oferta == "Venta" ? "" : "checked"; ?>>
                    <label class="form-check-label" for="Alquiler">Alquiler</label>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3 offset-2">
                    <h5>Introduzca el numero de habitaciones</h5>
                </div>
                <div class="col-3">
                    <h5>Introduzca el precio</h5>
                </div>
                <div class="col-3">
                    <h5>Introduzca los metros cuadrados</h5>
                </div>

            </div>
            <div class="row">
                <div class="col-3 offset-2">
                    <input class="form-control" type="number" id="habitaciones" name="habitaciones" min="1" max="10" placeholder="Entre 1 y 10" required value="<?php echo $objCasa->habitaciones ?>">
                </div>
                <div class="col-3">
                    <input class="form-control" type="number" id="precio" name="precio" placeholder="Precio" required value="<?php echo $objCasa->precio ?>">
                </div>
                <div class="col-3">
                    <input class="form-control" type="number" id="metros" name="metros" placeholder="Metros cuadrados" required value="<?php echo $objCasa->metrosCuadrados ?>">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6 offset-3">
                    <input class="form-control" type="text" name="descripcionBreve" placeholder="Descripción breve" required value="<?php echo $objCasa->descripcionBreve ?>">
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-6 offset-3">
                    <textarea name="descripcion" placeholder="Desripcion más extensa (opcional)" maxlength="250"><?php echo $objCasa->descripcion ?></textarea>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-6 offset-3">
                    <input class="btn-submit" type="submit" value="Submit">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Sube un archivo: <input type="file" class="btn-file" name="fileToUpload" id="fileToUpload"></p>
                </div>
            </div>
        </form>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myCheck").required;
            document.getElementById("demo").innerHTML = x;
        }
    </script>

</body>

</html>