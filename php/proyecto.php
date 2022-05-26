<?php

    include_once '../includes/proyecto.inc.php';

    if (empty($_SESSION['cuenta'])) {
        include_once '../includes/restricion.inc.php';
    }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Registro Proyecto</title>
</head>

<body>

    <?php
        include_once '../includes/nav.inc.php';

        $cedula = $_SESSION['cuenta'];

        $sql = "SELECT * FROM proyecto WHERE cedula_usuario = '$cedula'";
        $query_run = mysqli_query($conn, $sql);
    ?>

    <section class="text-center" style="margin: 60px;">

        <div class="container">

            <h2 class="mt-4 text-center"><i class="fas fa-file-alt"></i> Gestión de Proyectos</h2>
            
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> Crear Nuevo Proyecto</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nuevo Proyecto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="proyecto.php" method="POST">

                            <div class="modal-body">
                                <p id="error" style="color: red; font-size: 17px;" class="text-center">
                                    <?php echo $error ?>
                                </p>

                                <div class="mb-3">
                                    <label class="form-label"><b>Nombre Proyecto</b></label>
                                    <input type="text" class="form-control" name="nombreProyecto" autofocus>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="crearProyecto">Crear</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <hr>

            <div class="card">
                <br>
                <div class="card-body">
                    <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col"><i class="fas fa-file-alt"></i> Nombre Proyecto </th>
                                    <th scope="col"><i class="fas fa-sign-in-alt"></i> Operacion </th>
                                </tr>
                            </thead>
                    <?php
                        if($query_run){
                            foreach($query_run as $row){
                    ?>
                            <tbody class="table-success">
                                <tr>
                                    <form action="proyecto.php" method="POST">
                                        <td> <?php echo $row['nombre_proyecto'];?> </td>         
                                        <td> <button type="submit" class="btn btn-danger" name="eliminarProyecto">Eliminar</button> </td>
                                    </form>    
                                </tr>
                            </tbody>
                    <?php           
                            }
                        } else {                      
                            echo "Datos no encontrados";
                        }
                    ?>
                        </table>
                </div>    
                <br>    
            </div>
        </div>
         
        </div>
    </section>

    <?php
        include_once '../includes/scripts.inc.php';
    ?>
</html>