<?php

class cliente
{
    public $id;
    public $dni;
    public $nombre;
    public $apellidos;
    public $fechaN;

    public function __construct($dni, $nombre, $apellidos, $fechaN)
    {
        $this->setId(null);
        $this->setDni($dni);
        $this->setNombre($nombre);
        $this->setApellidos($apellidos);
        $this->setFechaN($fechaN);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($value)
    {
        $this->dni = $value;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($value)
    {
        $this->nombre = $value;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($value)
    {
        $this->apellidos = $value;
    }

    public function getFechaN()
    {
        return $this->fechaN;
    }

    public function setFechaN($value)
    {
        $this->fechaN = $value;
    }
}
