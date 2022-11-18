<?php


if(isset($_COOKIE['contador'])){
    if($_COOKIE['contador'] === 1){
    echo '<h1>Bienvenido por primera vez</h1>';
    (int) $_COOKIE['contador'] ++;
    }else{
        (int) $_COOKIE['contador'] ++;
        echo '<h1>Visita número: '.(int) $_COOKIE['contador'].'</h1>';
    }
}
else{
    setcookie('contador',1,time()+20000);
}



?>