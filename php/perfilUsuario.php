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

    <title>Actualizar Perfil</title>

</head>

<body>

    <?php
        include_once '../includes/nav.inc.php';
    ?>
    
    <?php
        if(isset($_SESSION['msg'])): ?>

            <br>    
            <div class="container alert alert-info text-center" role="alert">
                <?php 
                    echo "<i class='fas fa-check-circle'></i> " . $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                ?>
            </div>

        <?php endif ?>  

    <div class="container" style="margin-top: 80px; padding-left: 250px;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="width: 400px;">
                        <div class="card-header bg-light text-center">
                            <h4><i class="fas fa-user-edit"></i> Perfil</h4>
                        </div>
                        <div class="card-body">
                            <p id="error" style="color: red; font-size: 17px;" class="text-center">
                                <?php echo $errorusuario ?>
                            </p>
                            <form action="perfilUsuario.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Cedula</label>
                                        <input type="text" class="form-control" name="cedula" readonly="" value="<?php echo $_SESSION['cuenta']; ?>">
                                    </div>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="nombre" readonly="" value="<?php echo $_SESSION['nombre']; ?>">
                                    </div>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" name="clave" value="<?php echo $_SESSION['clave']; ?>">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success" name="actualizarUsuario">Actualizar</button>
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