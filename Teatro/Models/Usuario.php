<?php
namespace Models;

use Lib\BaseDatos;
use PDOException;

class Usuario {

    private string $usuario;
    private string $password;

    private BaseDatos $bd;

    public function __construct(string $usuario, string $password) {
        $this->bd = new BaseDatos();
        $this->usuario = $usuario;
        $this->password = $password;
    }

    public function getUsuario(): string {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): void {
        $this->usuario = $usuario;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public static function fromArray(array $data): Usuario {
        return new usuario(
            $data["user"] ?? "",
            $data["password"] ?? "");
    }

    public function save(): bool {
        $usuario = $this->getusuario();
        $password = $this->getPassword();
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=> 4]);

        $sql = $this->bd->prepara("INSERT INTO usuario (usuario, password) VALUES ('{$usuario}','{$password_segura}')");

        try {
            $sql->execute();
            
            return true;
        } catch (PDOException) {
            return false;
        }
    }

    public function buscaUser($usuario){
        $result = false;
        $cons = $this->bd->prepara("SELECT * FROM usuarios WHERE usuario = :usuario");
        $cons->bindParam(':usuario', $usuario, \PDO::PARAM_STR);

        try{
            $cons->execute();
            if($cons && $cons->rowCount() == 1){  
                $result = $cons->fetch(\PDO::FETCH_OBJ);      
            }
        }catch(PDOException){
            
            $result = false;
        }
        
        return $result;
    }

    public function login(){
        $result = false;
        $usuario = $this->usuario;
        $password = $this->password;

        $usuario = $this->buscaUser($usuario);

        if($usuario !== false){
            $verify = password_verify($password, $usuario->password);

            if($verify){
                $result = $usuario;
            }
        }

        return $result;
    }

    
}