<?php


class Cliente {
   
    private $idCliente;
    private $nombre;
    private $apellido;
    private $email;

    // Constructor
    public function __construct( $nombre, $apellido, $email) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
    }

    // Getters y Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self {
        $this->nombre = $nombre;
        return $this;
    }

    public function getTelefono(): string {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): void {
        $this->telefono = $telefono;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }
}
?>