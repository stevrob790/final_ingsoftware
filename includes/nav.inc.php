<?php
    include_once 'usuario.inc.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plugin" viewBox="0 0 16 16">
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

                <?php 
                    if (empty($_SESSION['cuenta'])) {  ?>
                        <a class="btn btn-outline-success" href="login.php" role="button">Iniciar sesión</a>
                        <div style="padding-left: 20px;"></div>
                        <a class="btn btn-success" href="registro.php" role="button">Crear cuenta</a>

                    <?php } else{ ?>
                    
                        <div class="btn-group" style="padding-left: 30px;">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i> Cuenta: <?php echo $_SESSION['cuenta']; ?></button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="perfilUsuario.php"><i class="fas fa-user-edit"></i> Actualizar Datos</a></li>
                            <li><a class="dropdown-item" href="eliminarUsuario.php"><i class="fas fa-trash-alt"></i> Eliminar Cuenta</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <?php if(isset($_SESSION['cuenta'])): ?>
                                <li><a class="dropdown-item" href="proyecto.php?logout='1'"><i class="fas fa-sign-out-alt"></i> Salir</a></li>
                            <?php endif ?>
                            </ul>
                      </div>  
                <?php 
                    }                                     
                ?>
                    
            </div>
        </div>
    </nav>

    </div>
  </div>
</nav>