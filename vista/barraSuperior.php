    <!--**************************Barrapt-3- Superior**************************-->
    <div class="container-fluid bdorado negro">
        <div class="row ">
            <div class="col-md-7 col-12 text-center">
                <a href="../Controladores/c_provincias.php">
                    <h1>Spain Travels</h1>
                </a>
            </div>
            <?php
            if (isset($usuario)) { ?>
                <div class='col-md-2 col-sm-4 col-12 pt-3 text-center text-md-end'>
                    <a href='../Controladores/c_publicar.php'>
                        <p>Publicar Oferta</p>
                    </a>
                </div>
                <div class='col-md-1 col-sm-4 col-12 pt-3 centrado'>
                    <a href="../Controladores/c_perfilUsuario.php?userId=<?php echo $usuario->id ?>" target="_self">
                        <p><?php echo $usuario->username ?></p>
                    </a>
                </div>
                <div class='col-md-1 col-sm-4 col-12 pt-3 centrado'>
                    <a href='../Controladores/c_cerrarSesion.php?sesion=false'>
                        <p>Cerar Sesion</p>
                    </a>
                </div>
            <?php } else { ?>
                <div class='col-md-1 col-6 pt-3 offset-md-2 centrado'>
                    <a href='../Controladores/c_inicio.php'>
                        <p>Iniciar Sesion</p>
                    </a>
                </div>
                <div class='col-md-1 col-6 pt-3 centrado'>
                    <a href='../Vista/registro.php'>
                        <p>Registrarse</p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>