<?php
session_start();

if(isset($_SESSION['inicio']) && $_SESSION['inicio']){
    $user = $_SESSION['user'];
    $psw = $_SESSION['password'];
    $_SESSION['inicio'] = false;
}else{
    if(isset($_POST['user']) && isset($_POST['psw'])){ 
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['password'] = $_POST['psw'];
        header("Location: inicio.php");
    
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="user">Usuario: </label><input type="text" name="user" id="user" value="<?php if(isset($user))echo $user ?>"><br>
        <label for="psw">Contraseña: </label><input type="password" name="psw" id="psw" value="<?php if(isset($psw))echo $psw?>"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>