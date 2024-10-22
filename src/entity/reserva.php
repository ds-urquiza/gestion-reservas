<?php
class Reserva {
    /* definir las propiedades de la reserva */
    /* qué información necesitas almacenar para gestionar adecuadamente una reserva */
    /*  Las propiedades clave podrían incluir datos relacionados con la habitación, 
    el cliente, las fechas y el estado de la reserva */

    private $idReserva;
    private $cliente;
    private $habitacion;
    private $fechaIngreso;
    private $fechaSalida;
    private $estado;
    private $precioTotal;


    /* El constructor (__construct) debe inicializar las propiedades clave 
    cuando se crea una nueva reserva, como el cliente, la habitación, las fechas, y otras. */
    public function _construct($cliente, $habitacion, $fechaIngreso, $fechaSalida, $estado, $precioTotal){
        $this ->cliente =$cliente;
        $this ->habitacion =$habitacion;
        $this ->fechaIngreso =$fechaIngreso;
        $this ->fechaSalida =$fechaSalida;
        $this ->estado = 'pendiente'; /* pendiente de reserva */
        $this ->precioTotal = $precioTotal;

    }

    /* Calcula la reserva */
    public function calcularReserva($precioPorNoche){
        $dias = ($this -> fechaSalida) - ($this -> fechaIngreso);
        $this -> precioTotal = $dias * $precioPorNoche;
    }

    /* metodos getter y setter para cambiar los valores de las propiedades */

    public function getCliente(){
        return $this -> cliente;
    }

    public function setCliente(){
        $this -> cliente = $cliente;
    }

     public function getHabitacion(){
        return $this -> habitacion;
    }

    public function setHabitacion(){
        $this -> habitacion = $habitacion;
    }

     public function getPrecioTotal(){
        return $this -> precioTotal;
    }

    public function setPrecioTotal(){
        $this -> precioTotal = $precioTotal;
    }

}