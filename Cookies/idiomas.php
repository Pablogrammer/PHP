
<?php

if(isset($_POST['es']) && $_POST['es']){
    str_replace('Hello','Hola', '<h3 id="texto">');
}

if(isset($_POST['en']) && $_POST['en']){
    str_replace('Hola','Hello', '<h3 id="texto">');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>
    
    <h3>Seleccione su idioma</h3><br>

    <form action="idiomas.php" method="post">
        <label for="esp">Español</label><input type="radio" name="id" id="es" checked>
        <label for="en">Inglés</label><input type="radio" name="id" id="en"><br>
        <input type="submit" value="Cambiar">
    </form>
    
    <h3 id="texto">Hola</h3>
</body>
</html>