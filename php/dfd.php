<?php
    include_once '../includes/dfd.inc.php';

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
    <link rel="stylesheet" href="../css/subirImagen.css">
    <title>DFD</title>
</head>

<body>

    <?php
        include_once '../includes/nav.inc.php';
    ?>


    <div class="container">
        <br>
        <br>
        <h4 style="text-align: center;">CHECKLIST PARA LA VERIFICACIÓN DE LOS DIAGRAMAS DE FLUJO DE DATOS Y DIAGRAMAS DE FLUJO</h2>

            <div class="container">
                <figure class="image-container">
                    <img id="chosen-image">
                    <figcaption id="file-name"></figcaption>
                </figure>

                <input type="file" id="upload-button" accept="image/*">
                <label for="upload-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                        <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                      </svg> &nbsp; Subir Imagen
                </label>
            </div>

            <br>
            <br>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pregunta</th>
                        <th scope="col">Si</th>
                        <th scope="col">No</th>
                        <th scope="col">Observación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>¿Existen en el Diagrama de Flujo de Datos componentes que no tienen nombre (flujos de datos, procesos, almacenamientos, entradas o salidas)?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="a" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="a" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>¿Existen almacenes de datos que son entradas y a los que nunca se hace referencia?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="b" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="b" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>¿Existen procesos que no reciben entradas?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="c" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="c" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>¿Existen procesos que no generan salidas?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="d" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="d" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>¿Existen procesos que tienen varias finalidades? (si es así, entonces se tiene que simplificar extendiendolos en varios procesos para poder estudiarlos mejor.)</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="e" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>¿Existen almacenes de datos a los que nunca se hace referencia?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="f" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="f" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>¿Es el flujo de datos que llega a un proceso adecuado para realizarlo?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="g" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="g" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>¿Existen demasiados datos en el almacen de datos (mas que los detalles necesarios)?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="h" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="h" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>¿El flujo de datos que llega a un proceso es demasiado extenso para la salida que éste produce?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="i" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="i" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>¿Se introducen alias en la descripción del sistema? ¿Aparecen en el diccionario de datos? (si no es así entonces pueden presentarse inconsistencias al describir y comprender el sistema).</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="j" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="j" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>¿Comprende el diccionario de datos los detalles de los flujos de datos como el nombre de los campos, los tipos de datos, las longitudes y la descripción?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="k" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="k" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>¿Los condicionales de los diagrama de flujo tienen determinadas las acciones a tomar por los caminos de SI y NO?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="l" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="l" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>¿Está claramente definido el Inicio y el Fin del Diagrama de Flujo?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="m" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="m" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>¿Existen en el Diagrama de Flujo componentes que no tienen nombre (procesos, decisiones)?</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="n" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="n" id="inlineRadio1" value="option2">
                            </div>
                        </td>
                        <td><textarea class="form-control" aria-label="With textarea"></textarea></td>
                    </tr>
                </tbody>
            </table>

            <br>

            <div class="container" style="text-align: center;">
                <form action="dfd.php" method="post">
                    <button type="submit" class="btn btn-danger" id="validar" name="validar">Validar</button>
                    <button type="submit" class="btn btn-primary" id="guardar" name="crear">Guardar</button>
                </form>    

            <!-- 
                Funciones de botones:

                Validar: Validar la estructura del diagrama de flujo, TODOS deben estar en "no" para aceptar sin error
                    Si cualquier opcion esta en si, arrojar mensaje de error

                Guardar: Almacenar tabla en la bd posteriormente haber validado la estructura    
            -->
            </div>

            <br><br>
    </div>

    <script src="../js/subirImagen.js"></script>
    <script src="../js/funciones.js"></script>

    <?php
        include_once '../includes/scripts.inc.php';
    ?>
</html>