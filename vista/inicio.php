<?php include_once("header.html") ?>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="centrado">
                    <a href="../Controladores/c_provincias.php" style="text-decoration: none">Spain Homes</a>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-4 offset-4 mt-4">
                <div class="formulario">
                    <form method="post" action="../Controladores/c_inicio.php">

                        <h4>Inicio de sesion</h4>

                        <label for="name">User Name</label><br>

                        <input type="text" class="valores" name="name" id="uName" placeholder="User Name" required><br>

                        <label for="password">Password</label><br>

                        <input type="password" class="valores" name="password" id="password" placeholder="Password" required><br>

                        <button type="submit" class="valores btn-inicio">Iniciar Sesión</button><br>

                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <p class="centrado">Si no tienes una cuenta <a href="../Vista/registro.php">haz click aquí</a></p>
            </div>
        </div>
    </div>



</body>