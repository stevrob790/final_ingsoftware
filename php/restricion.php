<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
    <style>
        section {
            color: white;
            background-image: url(../imgs/blue.jpg);
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;        
        }
    </style>
</head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plugin" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 1 2.898 5.673c-.167-.121-.216-.406-.002-.62l1.8-1.8a3.5 3.5 0 0 0 4.572-.328l1.414-1.415a.5.5 0 0 0 0-.707l-.707-.707 1.559-1.563a.5.5 0 1 0-.708-.706l-1.559 1.562-1.414-1.414 1.56-1.562a.5.5 0 1 0-.707-.706l-1.56 1.56-.707-.706a.5.5 0 0 0-.707 0L5.318 5.975a3.5 3.5 0 0 0-.328 4.571l-1.8 1.8c-.58.58-.62 1.6.121 2.137A8 8 0 1 0 0 8a.5.5 0 0 0 1 0Z"/>
              </svg> Vanegas Soft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="proyecto.php">Gestion de Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="dfd.php">DFD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matrizTrazabilidad.php">Matriz Trazabilidad</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

        <section>
            <div class="bg text-dark px-4 py-5 text-center">
                <div class="py-5">
                <h1 class="display-5 fw-bold text-dark">Registre Su Cuenta</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-4">Para hacer uso del software, inicie sesión o registre una cuenta</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a class="btn btn-success btn-lg px-4 me-sm-3 fw-bold" href="login.php" role="button">Iniciar sesión</a>
                    <a class="btn btn-primary btn-lg px-4" href="registro.php" role="button">Crear Cuenta</a>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <?php
            include_once '../includes/scripts.inc.php';
        ?>   
    </body>

</html>