<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'reservas')]
class Reserva {
    /* definir las propiedades de la reserva */
    /* qué información necesitas almacenar para gestionar adecuadamente una reserva */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $fechaIngreso;

    #[ORM\Column(type: 'datetime')]
    private $fechaSalida;

    #[ORM\ManyToOne(targetEntity: 'Habitacion')]
    #[ORM\JoinColumn(name: 'habitacion_id', referencedColumnName: 'id')]
    private $habitacion;
  
    #[ORM\Column(type: 'string', length: 100)]
    private $cliente;

    /* El constructor (__construct) debe inicializar las propiedades clave 
    cuando se crea una nueva reserva */
    public function __construct(\DateTimeInterface $fechaIngreso, 
                                \DateTimeInterface $fechaSalida, 
                                Habitacion $habitacion,
                                string $cliente){

        $this ->fechaIngreso =$fechaIngreso;
        $this ->fechaSalida =$fechaSalida;
        $this ->habitacion =$habitacion;
        $this ->cliente =$cliente;
        
    }


    /* metodos getter y setter para cambiar los valores de las propiedades */

     // Getters y Setters
     public function getId(): ?int {
        return $this->id;
    }

    public function getFechaIngreso(): \DateTimeInterface {
        return $this->fechaIngreso;
    }

    public function setFechaIngreso(\DateTimeInterface $fechaIngreso): self {
        $this->fechaIngreso= $fechaIngreso;
        return $this;
    }

    public function getFechaSalida(): \DateTimeInterface {
        return $this->fechaSalida;
    }

    public function setFechaSalida(\DateTimeInterface $fechaSalida): self {
        $this->fechaSalida = $fechaSalida;
        return $this;
    }

    public function getHabitacion(): ?Habitacion {
        return $this->habitacion;
    }

    public function setHabitacion(?Habitacion $habitacion): self {
        $this->habitacion = $habitacion;
        return $this;
    }

    public function getClienteNombre(): string {
        return $this->cliente;
    }

    public function setClienteNombre(string $cliente): self {
        $this->cliente = $cliente;
        return $this;
    }
}
