<?php include_once("header.html") ?>

<body>
    <div class="container bdorado rounded mt-5">
        <form method="post" action="../Controladores/c_inicio.php">
            <div class="form-group row">
                <div class="col-3 text-center mt-4">
                    <h5><a href="../Controladores/c_provincias.php" style="text-decoration: none">Spain
                            Travels</a></h5>
                </div>
                <div class="col-12 negro text-center">
                    <h2>Inicio de sesion</h2>
                </div>
                <label class="sr-only" for="name">User Name</label>
                <div class="col-12">
                    <input type="text" class="form-control mb-2 mr-2 text-center" name="name" id="uName" placeholder="User Name">
                </div>
                <label class="sr-only" for="password">password</label>
                <div class="col-12">
                    <input type="password" class="form-control mb-2 mr-2 text-center" name="password" id="password" placeholder="Password">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn-inicio w-100 mb-2">Iniciar Sesión</button>
                </div>
            </div>

        </form>
        <div class="row">
            <div class="col-6 offset-6">
                <button onclick="document.location=registro.php" class="btn-registro w-100 mb-2">Registrarse</button>
            </div>
        </div>
    </div>

</body>