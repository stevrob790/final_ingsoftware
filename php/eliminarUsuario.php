<?php
    include_once '../includes/usuario.inc.php';

    if (empty($_SESSION['cuenta'])) {
        header('location: index.php');
    }    
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Eliminar</title>

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
                        <h4><i class="fas fa-id-card"></i> Verificacion</h4>
                    </div>
                    <div class="card-body">
                        <p id="error" style="color: red; font-size: 17px;" class="text-center">
                            <?php echo $errorusuario ?>
                        </p>
                        <form action="eliminarUsuario.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Cedula</label>
                                    <input type="text" class="form-control" name="cedula" autofocus>
                                </div>
                                <br>
                                <div class="form-group col-md-6">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" name="clave">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-danger" name="eliminarUsuario">Eliminar <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/></svg></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

    <?php
        include_once '../includes/scripts.inc.php';
    ?>
</html>