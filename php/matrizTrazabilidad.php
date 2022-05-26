<?php
    include_once '../includes/conexion.inc.php';

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

    <title>Matriz Trazabilidad</title>
</head>

<body>

    <?php
        include_once '../includes/nav.inc.php';
    ?>


    <?php
        include_once '../includes/scripts.inc.php';
    ?>
</html>