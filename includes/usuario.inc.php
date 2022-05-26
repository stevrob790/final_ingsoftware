<?php

    include_once 'conexion.inc.php';

    $error = "";
    $errorusuario = "";
    $icon = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-exclamation-circle' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/><path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";


    if (isset($_POST['crearUsuario'])) {
        $cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
        $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
        $clave = mysqli_real_escape_string($conn, $_POST['clave']);


        if (empty($cedula) || empty($nombre) || empty($clave)) {
                
            $error .= $icon . " Todos los campos son obligatorios";
           
        } else if (!is_numeric($cedula)) {
                
            $error .= $icon . " Cedula debe contener digitos";
           
        } else if (is_numeric($nombre)) {
            
            $error .= $icon . " Nombre debe contener letras";

        }

        if (empty($error)) {
                
            $user = mysqli_query($conn, "SELECT * FROM usuario where cedula='$cedula'");
            $result = mysqli_num_rows($user);

            if ($result) {
                
                $error = $icon . " Cuenta registrada, utilice otra!";
                
            } else {
                    
                $sql = "INSERT INTO usuario (cedula, nombre, clave) VALUES ('$cedula', '$nombre', '$clave');";
                mysqli_query($conn, $sql);
                        
                $_SESSION['cuenta'] = $cedula;
                $_SESSION['nombre'] = $nombre;
                $_SESSION['clave'] = $clave;
                 
                header('location: ../php/proyecto.php');
            } 
        }
    }

    if (isset($_POST['logearUsuario'])) {
        $cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
        $clave = mysqli_real_escape_string($conn, $_POST['clave']);
        
        if (empty($cedula) || empty($clave)) {
           $error .= $icon . " Todos los campos son obligatorios";
        } else if (!is_numeric($cedula)) {
            $error .= $icon . " Cedula debe contener digitos";
        } 

        if (empty($error)) {
            $query = "SELECT * FROM usuario WHERE cedula ='$cedula' AND clave='$clave'";
        
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                
                $_SESSION['cuenta'] = $cedula;
                $_SESSION['clave'] = $clave;
                
                header('location: ../php/proyecto.php');
            } else {
                $error .= $icon . " Cuenta o clave incorrecta";
            }
        }
    }

    if (isset($_POST['actualizarUsuario'])) {
        $cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
        $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
        $clave = mysqli_real_escape_string($conn, $_POST['clave']);
 

        if(empty($errorusuario)){    
            $query = "UPDATE usuario SET clave ='$clave'";

            $query_run = mysqli_query($conn, $query);

            $_SESSION['clave'] = $clave;
            
            if ($query_run) {
                $_SESSION['msg'] = "Usuario Actualizado";
            }
        }
    }

    if (isset($_POST['eliminarUsuario'])) {
        $cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
        $clave = mysqli_real_escape_string($conn, $_POST['clave']);;

        if (empty($cedula) || empty($clave)) {
            $errorusuario .= $icon . " Todos los campos son obligatorios";
        } 

        if (empty($errorusuario)) {

            $query = mysqli_query($conn, "DELETE FROM usuario WHERE cedula ='$cedula'");
            $newquery = mysqli_query($conn, "DELETE FROM proyecto WHERE cedula_usuario ='$cedula'");

            header('location: ../php/index.php');

            $_SESSION['msg'] = "Cuenta Eliminada";
        }
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['cuenta']);
        header("location: ../php/index.php");
    }
?>
