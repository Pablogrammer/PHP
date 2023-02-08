<?php

    namespace Models;
    use Lib\BaseDatos;
    use PDOException;

    class Butaca extends BaseDatos{

        function __construct( private int $fila, private int $columna, private string $ocupado, private string $usuario)
        {
            $this->fila = $fila;
            $this->columna = $columna;
            $this->ocupado = $ocupado;
            $this->usuario = $usuario;            
        }

        
    public function getFila(): int {
        return $this->fila;
    }

    public function setFila(int $fila): void {
        $this->fila = $fila;
    }

    
    public function getColumna(): int {
        return $this->columna;
    }

    public function setColumna(int $columna): void {
        $this->columna = $columna;
    }

    
    public function getOcupado(): string {
        return $this->ocupado;
    }

    public function setOcupado(string $ocupado): void {
        $this->ocupado = $ocupado;
    }

    
    public function getUsuario(): string {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): void {
        $this->usuario = $usuario;
    }



        public function obtenerButacas(){

            $this->consulta("SELECT * FROM butacas ORDER BY fila, columna");
            return $this->extraerTodos(); 
        }

        public function extraerTodos(): ?array{

            $butaca = [];
            $butaca_datos = $this -> extraer_todos();

            foreach($butaca_datos as $datos){
                $butaca[] = Butaca::fromArray($datos);
            }
            return $butaca;
        }

    public static function fromArray(array $data): Usuario {
        return new usuario(
            $data["fila"] ?? 0,
            $data["columna"] ?? 0,
            $data["ocupado"] ?? "",
            $data["usuario"] ?? ""
        );
    }

    }
