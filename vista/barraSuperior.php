    <!--**************************Barrapt-3- Superior**************************-->
    <div class="container-fluid bdorado negro">
        <div class="row text-center">
            <div class="col-lg-6 col-12">
                <a href="../Controladores/c_provincias.php">
                    <h1>Spain Travels</h1>
                </a>
            </div>
            <?php
            if (isset($usuario)) { ?>
                <div class='col-lg-2 col-sm-4 col-12 pt-3'>
                    <a href='../Controladores/c_publicar.php'>
                        <p>Publicar Oferta</p>
                    </a>
                </div>
                <div class='col-lg-2 col-sm-4 col-12 pt-3'>
                    <a href="../Controladores/c_perfilUsuario.php?userId=<?php echo $usuario->id ?>" target="_self">
                        <p><?php echo $usuario->username ?></p>
                    </a>
                </div>
                <div class='col-lg-2 col-sm-4 col-12 pt-3'>
                    <a href='../Controladores/c_cerrarSesion.php?sesion=false'>
                        <p>Cerar Sesion</p>
                    </a>
                </div>
            <?php } else { ?>
                <div class='col-md-1 col-6 pt-3 offset-md-2'>
                    <a href='../Controladores/c_inicio.php'>
                        <p>Iniciar Sesion</p>
                    </a>
                </div>
                <div class='col-md-1 col-6 pt-3'>
                    <a href='../Vista/registro.php'>
                        <p>Registrarse</p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>