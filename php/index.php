<?php
    include_once '../includes/usuario.inc.php'; 
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Vanegas Soft</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        /* ----------------------------- */
        
        h5 {
            position: absolute;
            text-decoration: underline;
            margin-left: 18px;
            margin-top: 13px;
        }
        
        section {
            color: white;
            background-image: url(../imgs/building.jpg);
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        /* ----------------------------- */
        
        .jumbotron {
            padding-top: 3rem;
            padding-bottom: 3rem;
            margin-bottom: 0;
        }
        
        @media (min-width: 768px) {
            .jumbotron {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }
        }
        
        .jumbotron p:last-child {
            margin-bottom: 0;
        }
        
        .jumbotron h1 {
            font-weight: 300;
        }
        
        .jumbotron .container {
            max-width: 40rem;
        }
        
        footer {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }
    </style>
</head>

<body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plugin" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 1 2.898 5.673c-.167-.121-.216-.406-.002-.62l1.8-1.8a3.5 3.5 0 0 0 4.572-.328l1.414-1.415a.5.5 0 0 0 0-.707l-.707-.707 1.559-1.563a.5.5 0 1 0-.708-.706l-1.559 1.562-1.414-1.414 1.56-1.562a.5.5 0 1 0-.707-.706l-1.56 1.56-.707-.706a.5.5 0 0 0-.707 0L5.318 5.975a3.5 3.5 0 0 0-.328 4.571l-1.8 1.8c-.58.58-.62 1.6.121 2.137A8 8 0 1 0 0 8a.5.5 0 0 0 1 0Z"/>
              </svg> Vanegas Soft</a>
            <a class="btn btn-outline-success" href="login.php" role="button">Iniciar sesión</a>
            <div style="margin-left: -1700px;"></div>
            <a class="btn btn-success" href="registro.php" role="button">Crear cuenta</a>
        </div>
        </div>
    </nav>

    <section class="jumbotron text-center">

        <?php
            if(isset($_SESSION['msg'])): ?>
                <div class="container alert alert-danger text-center" role="alert">
                    <?php 
                        echo "<i class='fas fa-check-circle'></i> " . $_SESSION['msg'];
                        unset ($_SESSION['msg']);
                    ?>
                </div>
        <?php endif ?>  

        <div class="py-5">
            <h1 class="display-5 fw-bold text-white"><svg xmlns="http://www.w3.org/2000/svg" width="3.5rem" height="3.5rem" fill="currentColor" class="bi bi-plugin" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 1 2.898 5.673c-.167-.121-.216-.406-.002-.62l1.8-1.8a3.5 3.5 0 0 0 4.572-.328l1.414-1.415a.5.5 0 0 0 0-.707l-.707-.707 1.559-1.563a.5.5 0 1 0-.708-.706l-1.559 1.562-1.414-1.414 1.56-1.562a.5.5 0 1 0-.707-.706l-1.56 1.56-.707-.706a.5.5 0 0 0-.707 0L5.318 5.975a3.5 3.5 0 0 0-.328 4.571l-1.8 1.8c-.58.58-.62 1.6.121 2.137A8 8 0 1 0 0 8a.5.5 0 0 0 1 0Z"/>
              </svg> VANEGAS SOFT</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Revisa que todos tus diagramas de flujo cumplan con sus caracteristicas Anota que requerimientos se relacionan entre sí de una forma sencilla</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a class="btn btn-success btn-lg px-4 me-sm-3 fw-bold" href="dfd.php" role="button">DFD</a>
                <a class="btn btn-primary btn-lg px-4" href="matrizTrazabilidad.php" role="button">Matriz Trazabilidad</a>
                </div>
            </div>
        </div>
    </section>


    <?php
        include_once '../includes/scripts.inc.php';
    ?>
</html>