<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    $_SESSION['inicio'] = true;
}else{
    $_SESSION['inicio'] = false;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Usted ha iniciado sesion correctamente</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="submit" name="recordar" value="Recordarme"></input>
    </form>
    <a href="login.php">Volver a login</a>
</body>
</html>