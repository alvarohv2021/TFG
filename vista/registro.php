<?php include_once("header.html") ?>

<body>
    <div class="inicio">
        <h1>
            <a href="../Controladores/c_provincias.php" style="text-decoration: none">Spain Homes</a>
        </h1>

        <div class="formulario">
            <form method="post" action="../Controladores/c_inicio.php">


                <h4>Inicio de sesion</h4>

                <label for="email">Correo</label><br>

                <input type="email" class="valores" name="email" placeholder="Email Address" required>

                <label for="name">Name de Usuario</label><br>

                <input type="text" class="valores" name="name" id="uName" placeholder="User Name" required><br>

                <label for="password">Contraseña</label><br>

                <input type="password" class="valores" name="password" id="password" placeholder="Password" required><br>

                <label for="cPassword">Confirmar contraseña</label>

                <input type="password" class="valores" name="cPassword" placeholder="Confirm Password" required>


                <button type="submit" class="valores btn-registro">Registrarse</button><br>

            </form>
        </div>
        <p>Si ya tienes una cuenta haz <a href="../Vista/inicio.php">click aquí</a></p>
    </div>

    <?php
    error_reporting(E_ERROR | E_PARSE);
    if ($_GET["cPassword"]) { ?>
        <script>
            alert("Las contraseñas no coinciden")
        </script>
    <?php }
    if ($_GET["usuarioUsado"]) { ?>
        <script>
            alert("Este usuario no esta disponible")
        </script>
    <?php }
    if ($_GET["correoUsado"]) { ?>
        <script>
            alert("Este correo no esta disponible")
        </script>
    <?php } ?>
</body>

</html>