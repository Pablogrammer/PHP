<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisca</title>
</head>
<body>
    
    <h1>Juego de la brisca</h1>


    <?php

$cartas = array("bastos_1","bastos_2","bastos_3","bastos_4","bastos_5","bastos_6","bastos_7","bastos_8","bastos_9","bastos_10","bastos_11","bastos_12",
"copas_1","copas_2","copas_3","copas_4","copas_5","copas_6","copas_7","copas_8","copas_9","copas_10","copas_11","copas_12",
"espadas_1","espadas_2","espadas_3","espadas_4","espadas_5","espadas_6","espadas_7","espadas_8","espadas_9","espadas_10","espadas_11","espadas_12",
"oros_1","oros_2","oros_3","oros_4","oros_5","oros_6","oros_7","oros_8","oros_9","oros_10","oros_11","oros_12");


global $cartas;

function repartir($veces){

    global $cartas;

        //Mostramos tres cartas con un bucle for
        for($i=1; $i<=$veces; $i++){

            $rand = rand(0, count($cartas)-1);
            $rand_carta = $cartas[$rand];

            echo '<img src="./imagenes/'.$rand_carta.'.jpg" width= "100">';

            unset($cartas[$rand]);
            array_splice($cartas,1,0);

        }
}



echo "<h1>Jugador 1</h1><br>";
repartir(3);
echo "<h1>Jugador 2</h1><br>";
repartir(3);

echo "<h1>Resultado J1</h1><br>";
repartir(10);
echo "<h1>Resultado J2</h1><br>";
repartir(10);

?>



 
</body>
</html>