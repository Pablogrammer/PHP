<?php

namespace App\Entity;

use App\Repository\EjemplarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EjemplarRepository::class)]
class Ejemplar
{

    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Libro $isbn = null;

    #[ORM\Column]
    private ?bool $estado = null;

    #[ORM\Column(length: 255)]
    private ?string $estanteria = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsbn(): ?Libro
    {

        return $this->isbn;
    }

    public function setIsbn(?Libro $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function isEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getEstanteria(): ?string
    {
        return $this->estanteria;
    }

    public function setEstanteria(string $estanteria): self
    {
        $this->estanteria = $estanteria;

        return $this;
    }
}
