<?php 

namespace Controllers;

use Lib\BaseDatos;
use PDO;
use PDOException;
use Lib\Pages;
use Models\Usuario;

class ApiUsuarioController extends PDO{

    private BaseDatos $conexion;
    private Usuario $usuario;
    private Pages $pages;



    public function __construct(){
        $this -> pages = new Pages();
    }

    public function register(){
        

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            // var_dump($data);

            $nombre = $data->nombre;
            $email = $data->email;
            $passw = $data->passw;

            echo "Nombre: " .$nombre. "<br> Email: " .$email. "<br> Contraseña: " .$passw; //TODO Ahora comprobar que no existe en la base de datos y en ese caso meterlo

        }

        //TODO Hacer también el login con los mismos pasos

    }
}

?>