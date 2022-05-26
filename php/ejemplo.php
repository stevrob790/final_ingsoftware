<?php
    include_once '../includes/dfd.inc.php';

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

    <form method="post">  
        <table border="1" bgcolor="#00CCFF">  
            <tr><td>Name</td>  
            <td><input type="text" name="name"/></td>  
            </tr>  
            <tr><td rowspan="2">Sex</td>  
            <td><input type="radio" name="sex" value="Male"/>Male</td>  
            <tr>  
            <td><input type="radio" name="sex" value="Female"/>Female</td></tr>  
            </tr>  
            <tr><td><input type="submit" name="submit" value="Submit"/></td></tr>  
        </table>  
    </form> 

    <?php
        include_once '../includes/scripts.inc.php';
    ?>
</html>