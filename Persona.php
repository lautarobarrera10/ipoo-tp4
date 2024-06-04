<?php

class Persona {
    private $dni;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;

    public function __construct(int $dni, string $nombre, string $apellido, string $fechaNacimiento){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getDni(){
        return $this->dni;
    }

    public function setDni($value){
        $this->dni = $value;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($value){
        $this->nombre = $value;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($value){
        $this->apellido = $value;
    }

    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($value){
        $this->fechaNacimiento = $value;
    }

    public function __toString(){
        return
        "DNI: " . $this->getDni() . "\n" .
        "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n" .
        "Fecha de nacimiento: " . $this->getFechaNacimiento() . "\n";
    }
}