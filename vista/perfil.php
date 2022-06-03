<!DOCTYPE html>
<html>

<head>
    <title>Perfil de <?php $usuario->username ?></title>
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
    <link href="../estilos/e_perfil.css" type="text/css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <div class="tab mt-2">
        <button class="eleccion" onclick="openCity(event, 'Favoritos')">Favoritos</button>
        <button class="eleccion" onclick="openCity(event, 'Publicaciones')">Publicaciones</button>
    </div>

    <div id="Publicaciones" class="contenido mt-5">
        <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>
            <div class="row ">
                <div class="col-12 ">
                    <h1>Tus publicaciones</h1>

                    <?php
                    $hayobjCasas = false;
                    for ($i = 0; $i < count($publicaciones); $i++) {
                    ?>

                        <div class='row bdorado ofertaCasa m-4'>
                            <div class='col-3'>
                                <p>Carrousel</p>
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
                                    <div class='col-4'>
                                        <p><?php echo $publicaciones[$i]->getHabitaciones() ?> hab.</p>
                                    </div>
                                    <div class='col-4'>
                                        <p><?php echo $publicaciones[$i]->getProvincia() ?></p>
                                    </div>
                                    <div class='col-4'>
                                        <p><?php echo $publicaciones[$i]->getMetrosCuadrados() ?> ㎡</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div id="Favoritos" class="contenido mt-5">
        <div class='container casasProvincia bmarron p-5 pt-1 mt-4'>
            <div class="row ">
                <div class="col-12 ">
                    <h1>Casas Favoritas</h1>

                    <?php
                    $hayobjCasas = false;
                    for ($i = 0; $i < count($casasFavoritas); $i++) {
                    ?>

                        <div class='row bdorado ofertaCasa m-4'>
                            <div class='col-3'>
                                <p>Carrousel</p>
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
                                    <div class='col-4'>
                                        <p><?php echo $casasFavoritas[$i]->getHabitaciones() ?> hab.</p>
                                    </div>
                                    <div class='col-4'>
                                        <p><?php echo $casasFavoritas[$i]->getProvincia() ?></p>
                                    </div>
                                    <div class='col-4'>
                                        <p><?php echo $casasFavoritas[$i]->getMetrosCuadrados() ?> ㎡</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openCity(evt, cityName) {
            var i, contenido, eleccion;
            contenido = document.getElementsByClassName("contenido");
            for (i = 0; i < contenido.length; i++) {
                contenido[i].style.display = "none";
            }
            eleccion = document.getElementsByClassName("eleccion");
            for (i = 0; i < eleccion.length; i++) {
                eleccion[i].className = eleccion[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</body>

</html>