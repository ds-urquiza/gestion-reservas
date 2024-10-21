<?php
class Reserva {
    /* definir las propiedades de la reserva */
    /* qué información necesitas almacenar para gestionar adecuadamente una reserva */
    /*  Las propiedades clave podrían incluir datos relacionados con la habitación, 
    el cliente, las fechas y el estado de la reserva */

    private $id;
    private $cliente;
    private $habitacion;
    private $fechaIngreso;
    private $fechaSalida;
    private $estado;


    /* El constructor (__construct) debe inicializar las propiedades clave 
    cuando se crea una nueva reserva, como el cliente, la habitación, las fechas, y otras. */
    public function _construct($cliente, $habitacion, $fechaIngreso, $fechaSalida, $estado){
        $this ->cliente =$cliente;
        $this ->habitacion =$habitacion;
        $this ->fechaIngreso =$fechaIngreso;
        $this ->fechaSalida =$fechaSalida;
        $this ->estado = 'pendiente'; /* pendiente de reserva */

    }

    public function calcularReserva($fechaIngreso, $fechaSalida){
        $contador = 0;
        $fechaIngresoBusqueda = $fechaIngreso;
        $fechaSalidaBuscqueda = $fechaSalida;
    }
}