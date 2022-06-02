<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/d08437ea27.js" crossorigin="anonymous"></script>
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

    <style>
        textarea {
            width: 100%;
            padding: .375rem .75rem;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }
    </style>
</head>

<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <h1>Publicar tu anuncio de particular gratis</h1>
    <div class="container bazul">
        <form method="POST" action="../Controladores/c_publicar.php">
            <div class="form-group row">
                <div class="col-12">
                    <label>
                        <h4 for="tipo">Elige tipo de inmueble</h4>
                    </label>
                </div>
                <div class="col-2 offset-3 btn">
                    <select name="tipo" id="tipo" required>
                        <option value="">Seleccione</option>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Ático">Ático</option>
                        <option value="Piso">Piso</option>
                        <option value="Bajo">Bajo</option>
                        <option value="Chalet/Casa">Chalet/Casa</option>
                        <option value="Plaza de garage">Bajo</option>
                    </select>
                </div>
                <div class="col-2">
                    <p>en</p>
                </div>
                <div class="col-1 btn">
                    <select name="idProvincia" id="idProvincia" required>
                        <option value="">Seleccione</option>
                        <?php for ($i = 0; $i < count($objProvincias); $i++) { ?>

                            <option value="<?php echo $objProvincias[$i]->id ?>"><?php echo $objProvincias[$i]->nombre ?></option>

                        <?php } ?>
                    </select>

                </div>


            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <h5>Seleccione Operacion:</h5>
                </div>
                <div class="form-check col-1 offset-4">
                    <input class="form-check-input" type="radio" id="Venta" name="oferta" value="Venta" required>
                    <label class="form-check-label" for="Venta">Venta</label>
                </div>
                <div class="form-check col-1 offset-2">
                    <input class="form-check-input" type="radio" id="Alquiler" name="oferta" value="Alquiler" required>
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
                    <input class="form-control" type="number" id="habitaciones" name="habitaciones" min="1" max="10" placeholder="Entre 1 and 10" required>
                </div>
                <div class="col-3">
                    <input class="form-control" type="number" id="precio" name="precio" placeholder="Precio" required>
                </div>
                <div class="col-3">
                    <input class="form-control" type="number" id="metros" name="metros" placeholder="Metros cuadrados" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6 offset-3">
                    <input class="form-control" type="text" name="descripcionBreve" placeholder="Descripción breve" required>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-6 offset-3">
                    <textarea name="descripcion" placeholder="Desripcion más extensa (opcional)"></textarea>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-6 offset-3">
                    <input class="btn-inicio" type="submit" value="Submit">
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