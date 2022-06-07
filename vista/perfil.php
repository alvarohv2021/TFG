<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Spain Homes</title>

    <link href="../imagenes/icono/hause.png" type="text/css" rel="icon">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <script src="https://kit.fontawesome.com/d08437ea27.js" crossorigin="anonymous"></script>
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
    <link href="../estilos/e_colores.css" type="text/css" rel="stylesheet">
    <link href="../estilos/e_casas.css" type="text/css" rel="stylesheet">
    <link href="../estilos/e_perfil.css" type="text/css" rel="stylesheet">
 
</head>
<body>
    <?php include_once("barraSuperior.php") ?>
    <!--**************************Contenido Principal**************************-->
    <div class="tab mt-2 centrado">
        <button class="eleccion" onclick="openCity(event, 'Favoritos')">Favoritos</button>
        <button class="eleccion" onclick="openCity(event, 'Publicaciones')">Publicaciones</button>
    </div>

    <?php if ($casasFavoritas != null) { ?>
        <div id="Favoritos" class="contenido mt-4">
            <div class='container casasProvincia bmarron pt-1'>
                <div class="row ">
                    <div class="col-12 ">
                        <h1 class="centrado">Casas Favoritas</h1>
                        <?php for ($i = 0; $i < count($casasFavoritas); $i++) { ?>
                            <div class='row bdorado ofertaCasa m-4'>
                                <div class='col-lg-3 col-md-6 col-12 p-0'>
                                    <img class="img-fluid" src="<?php echo $casasFavoritas[$i]->getRutaImagen() ?>" alt="">
                                </div>
                                <div class='col-lg-6 col-md-6 col-sm-12 col-12'>
                                    <div class='row'>
                                        <div class='col-12 pt-2'>
                                            <a href='../Controladores/c_casa.php?idCasa=<?php echo $casasFavoritas[$i]->getId() ?>&publicacion=<?php $propietario = $casasFavoritas[$i]->getPropietario(); if ($propietario == $usuario->id){ echo true;} ?>' target="_self">
                                                <h3><?php echo $casasFavoritas[$i]->getDescripcionBreve() ?></h3>
                                            </a>
                                        </div>
                                        <div class='col-12'>
                                            <p><?php echo $casasFavoritas[$i]->getDescripcion() ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-lg-3 col-12 bazul pt-3'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <h5><?php echo $casasFavoritas[$i]->getTipo() ?>/<?php echo $casasFavoritas[$i]->getOferta() ?></h5>
                                        </div>
                                        <div class='col-12'>
                                            <p><?php echo $casasFavoritas[$i]->getPrecio() ?><i class="fa-solid fa-euro-sign"></i></p>
                                        </div>
                                        <div class='col-3'>
                                            <p title="Habitaciones"><?php echo $casasFavoritas[$i]->getHabitaciones() ?> <i class="fa-solid fa-bed"></i></p>
                                        </div>
                                        <div class='col-3'>
                                            <p title="Metros Cuadrados"><?php echo $casasFavoritas[$i]->getMetrosCuadrados() ?> <i class="fa-solid fa-ruler-combined"></i></p>
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
        <div id="Favoritos" class="contenido mt-4">
            <div class='container casasProvincia bmarron pt-1 mt-4'>
                <div class="row ">
                    <div class="col-12 ">
                        <h1>Aun no has agragado ninguna vivienda a favoritos</h1>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <?php if ($publicaciones != null) { ?>
        <div id="Publicaciones" class="contenido mt-4">
            <div class='container casasProvincia bmarron pt-1'>
                <div class="row ">
                    <div class="col-12">
                        <h1 class="centrado">Tus publicaciones</h1>
                        <?php for ($i = 0; $i < count($publicaciones); $i++) { ?>
                            <div class='row bdorado ofertaCasa m-4'>
                                <div class='col-lg-3 col-md-6 col-12 p-0'>
                                    <img class="img-fluid" src="<?php echo $publicaciones[$i]->getRutaImagen() ?>" alt="">
                                </div>
                                <div class='col-lg-6 col-md-6 col-sm-12 col-12'>
                                    <div class='row'>
                                        <div class='col-12 pt-2'>
                                            <a href='../Controladores/c_casa.php?publicacion=true&idCasa=<?php echo $publicaciones[$i]->getId() ?>' target="_self">
                                                <h3><?php echo $publicaciones[$i]->getDescripcionBreve() ?></h3>
                                            </a>
                                        </div>
                                        <div class='col-12'>
                                            <p><?php echo $publicaciones[$i]->getDescripcion() ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-lg-3 col-12 bazul pt-3'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <h5><?php echo $publicaciones[$i]->getTipo() ?>/<?php echo $publicaciones[$i]->getOferta() ?></h5>
                                        </div>
                                        <div class='col-12'>
                                            <p><?php echo $publicaciones[$i]->getPrecio() ?><i class="fa-solid fa-euro-sign"></i></p>
                                        </div>
                                        <div class='col-3'>
                                            <p title="Habitaciones"><?php echo $publicaciones[$i]->getHabitaciones() ?> <i class="fa-solid fa-bed"></i></p>
                                        </div>
                                        <div class='col-3'>
                                            <p title="Metros Cuadrados"><?php echo $publicaciones[$i]->getMetrosCuadrados() ?> <i class="fa-solid fa-ruler-combined"></i></p>
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