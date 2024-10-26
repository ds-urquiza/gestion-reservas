<?php

interface IReserva {
    public function getId();
    public function getFechaIngreso();
    public function getFechaSalida();
    public function getHabitacion();
    public function getClienteNombre();
    
}