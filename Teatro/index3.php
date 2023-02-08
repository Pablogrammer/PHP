<?php

    require_once "autoloader.php";
    require_once './config/config.php';
    require_once 'Views/Layout/header.php';


    // use Controllers\FrontController;
    // FrontController::main();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teatro prueba</title>
    <style>
        p#escenario{
            text-align: center;
            color: black;
        }
        hr#escenario{
            margin: auto;
            width: 200px;
        }
        table{
            margin: auto;
            /* width: 30%; */
            border-spacing: 3px;
        }
        input{
            background-color: green;
        }
        /* input:focus{
            background-color: orange;
        } */
    </style>
</head>
<body>
    <p id="escenario"> Escenario </p>
    <hr id="escenario">
    <br><br>
    <table>
        <tr>
            <td><input type="button" id="1"></td>
            <td><input type="button" id="2"></td>
            <td><input type="button" id="3"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
        <tr>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
            <td><input type="button"></td>
        </tr>
    </table>
    <br>
    <p id="escenario"> Nota: se puede reservar un máximo de 5 butacas por persona.</p> 
</body>
</html>

<!-- CREAR BASE DE DATOS CON UN ID QUE SEA EL INPUT Y UN ESTADO QUE NOS DIRÁ SI ESTA DISPONIBLE(verde) U OCUPADA(rojo)
Para saber el color se hará una consulta de los dos datos y cuando el estado sea "Ocupado", con el ID
que hace referencia al input le cambiaremos el background-color a ese input -->



<?php
    require_once 'Views/Layout/footer.php';
?>