<?php
    include_once '../includes/usuario.inc.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Registro</title>
</head>

<body>

    <?php
        include_once '../includes/nav.inc.php';
    ?>

    <div class="container" style="margin-top: 80px; padding-left: 250px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 400px;">
                    <div class="card-header bg-light text-center">
                        <h4>Registro <i class="fas fa-sign-in-alt"></i></h4>
                    </div>
                    <div class="card-body">
                        <p id="error" style="color: red; font-size: 17px;" class="text-center">
                            <?php echo $error ?>
                        </p>
                        <form action="registro.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Cedula</label>
                                    <input type="text" class="form-control" name="cedula" autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="nombre">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" name="clave">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary col" name="crearUsuario">Crear Cuenta</button>
                            <br><br>
                            <a href="login.php">
                                <p>Ya tienes cuenta? Inicia Sesión</p>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once '../includes/scripts.inc.php';
    ?>
</html>