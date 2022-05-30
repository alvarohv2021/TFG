    <!--**************************Barra Superior**************************-->
    <div class="container-fluid bdorado negro">
        <div class="row ">
            <div class="col-8">
                <a href="../Controladores/c_provincias.php">
                    <h1>Spain Travels</h1>
                </a>
            </div>
            <?php
            if (isset($usuario)) { ?>
                <div class="col-2 pt-3">
                    <a href="../Controladores/c_perfilUsuario.php?userId=<?php echo $usuario->id ?>" target="_self">
                        <p><?php echo $usuario->username ?></p>
                    </a>
                </div>
                <div class='col-2 pt-3'>
                    <a href='../Controladores/c_cerrarSesion.php?sesion=false' style='text-decoration: none'>
                        <p class="negro">
                            Cerar Sesion</p>
                    </a>
                </div>
            <?php } else { ?>
                <div class='col-2 pt-3 '>
                    <a href='../Controladores/c_inicio.php' style='text-decoration: none'>
                        <p class="negro">Iniciar Sesion</p>
                    </a>
                </div>
                <div class="col-2 pt-3 negro">
                    <a href='registro.php' style='text-decoration: none'>
                        <p class="negro">Registrarse</p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>