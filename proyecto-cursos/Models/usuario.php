<?php 

namespace Models;

use Lib\BaseDatos;

class Usuario{

    private string $id;
    private string $nombre;
    private string $apellidos;
    private string $email;
    private BaseDatos $conexion;

    public function __construct(string $id, string $nombre, string $apellidos, string $email){

        $this -> conexion = new BaseDatos();
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> email = $email;
    }

    


	/**
	 * @return string
	 */
	public function getId(): string {
		return $this->id;
	}

	/**
	 * @param string $id 
	 * @return self
	 */
	public function setId(string $id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNombre(): string {
		return $this->nombre;
	}

	/**
	 * @param string $nombre 
	 * @return self
	 */
	public function setNombre(string $nombre): self {
		$this->nombre = $nombre;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getApellidos(): string {
		return $this->apellidos;
	}

	/**
	 * @param string $apellidos 
	 * @return self
	 */
	public function setApellidos(string $apellidos): self {
		$this->apellidos = $apellidos;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}
	
	/**
	 * @param string $email 
	 * @return self
	 */
	public function setEmail(string $email): self {
		$this->email = $email;
		return $this;
	}
}

?>