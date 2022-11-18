<?php

session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
  echo "<h3>Numero de tiradas: ".$_SESSION['count']."</h3>";
}

if(isset($_POST['hacer_tirada'])){

    $juego = new Cubilete;
    $juego->meter_dados();
    $juego->tirar_todas();

}
class Dado{
    public function __construct($opciones = ['AS','K','Q','J','8','7'],$cara = null){
        $this->opciones =$opciones;
        $this->cara = $cara;
    }
    
    
    function tirar(){
        $this->cara = $this->opciones[rand(0,5)];
        echo "<image src='./images/".$this->cara.".png'/>";
    }

    function nombreFigura(){
        return $this->cara;
    }
}
class Cubilete{
    
    public $contenido = [];

    function meter_dados(){
        for($i=0;$i<=4;$i++){
            array_push($this->contenido,new Dado);
        }
    }
    
    function tirar_todas(){
        for($i=0;$i<=4;$i++){
            $this->contenido[$i]->tirar();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poker</title>
</head>
<body style="background-color: #a2a2a2;">
    <h1>Juego Poker</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button type="submit" name="hacer_tirada">Hacer una tirada</button>
    </form>
</body>
</html>