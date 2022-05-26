 <?php

    include_once 'conexion.inc.php';

    $error = "";
    $icon = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-exclamation-circle' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/><path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";

    if (isset($_POST['crearProyecto'])) {
        $cedula = $_SESSION['cuenta'];
        $nombre = mysqli_real_escape_string($conn, $_POST['nombreProyecto']);

        if (empty($nombre)) {
            $error .= $icon . " Ingrese un nombre valido";
        } else if (empty($error)) {
            $sql = "INSERT INTO proyecto (cedula_usuario, nombre_proyecto) VALUES ('$cedula', '$nombre');";
            mysqli_query($conn, $sql);
        }
    }

    if (isset($_POST['eliminarProyecto'])) {
        $cedula = $_SESSION['cuenta'];

        $sql = "SELECT * FROM proyecto WHERE cedula_usuario = '$cedula'";
        $query_run = mysqli_query($conn, $sql);

        if($query_run){
            foreach($query_run as $row){
                $nombre = $row['nombre_proyecto'];
            }
        }
        
        $query = mysqli_query($conn, "DELETE FROM proyecto WHERE cedula_usuario ='$cedula' AND nombre_proyecto = '$nombre'");
    }
?>