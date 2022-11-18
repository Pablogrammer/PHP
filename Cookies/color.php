<?php
if(isset($_POST['color'])){
    $color = $_POST['color'];
    setcookie('color', $color, time()+800000);
}else{
    if(isset($_COOKIE['color'])){
        $color = $_COOKIE['color'];
    }else{
        $color = 'white';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color</title>
</head>
<body>
    <style>
        body{
            background-color: <?php echo $color;?>;
        }
    </style>

<h1>Elija el color de fondo</h1>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <input type="color" name="color">
    <input type="submit" value="Enviar" name="datos"></p>

    </form>
</body>
</html>