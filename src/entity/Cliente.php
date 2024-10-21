<?php

/* namespace DsUrquiza\GestionHotel\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: clientesrepository::class)]
#[ORM\Table(name: "clientes")]
 */
class Cliente {
    private $nombre;
    private $apellido;
    private $email;
    private $phone;

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string {
        return $this->phone;
    }

    public function setPhone(string $phone): self {
        $this->phone = $phone;
        return $this;
    }
}
