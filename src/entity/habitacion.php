<?php

class Habitacion
{
  
    private $id;
    private $tipoHabitacion; // Nuevo atributo para el tipo de habitación
    private $precio;

    // Getters y Setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoHabitacion(): string
    {
        return $this->tipoHabitacion;
    }

    public function setTipoHabitacion(string $tipoHabitacion): self
    {
        $this->tipoHabitacion = $tipoHabitacion;
        return $this;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;
        return $this;
    }
}